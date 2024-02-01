<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\ResetPassword;
use App\Entity\User;
use App\Form\ResetPasswordType;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/mot-de-passe-oublie', name: 'app_reset_password')]
    public function index(Request $request): Response
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        if ($request->get('email')) {
            $user = $this->entityManager->getRepository(User::class)->findOneByEmail($request->get('email'));
                
            if ($user) {
                // 1: Enregistrer en base la demande de changement de mot de passe avec user, token et createdAt : 
                $reset_password = new ResetPassword();
                $reset_password->setUser($user);
                $reset_password->setToken(uniqid());
                $reset_password->setCreatedAt(new DateTimeImmutable());
                $this->entityManager->persist(($reset_password));
                $this->entityManager->flush();

                // 2 : envoyer un mail a l'utilisateur pour qu'il puisse changer son mot de passe : 
                
                $url = $this->generateUrl('app_update_password', [
                    'token' =>$reset_password->getToken()
                ]);
                
                $content = "Bonjour".$user->getFirstname()."<br/>Vous avez demandé à reinitialiser votre mot de passe.<br/><br/>";
                $content .="Merci de bien vouloir cliquer sur le lien suivant pour <a href='".$url."'>modifier votre mot de passe<a/<";
                

                $mail = new Mail();
                $mail->send($user->getEmail(), $user->getFirstname().' '.$user->getLastname(), 'Reinitialiser votre mot de passe sur la Boutique Française', $content);               
                
                $this->addFlash('notice', 'Vous allez recevoir dans quelques secondes un mail pour reinitialiser votre mot de passe');

            }else {
                $this->addFlash('notice', 'Cette adresse mail ne correspond à aucun compte !');

            }
        }

        return $this->render('reset_password/index.html.twig');
    }

    #[Route('/mofifier-mon-mot-de-passe/{token}', name: 'app_update_password')]

    public function update(Request $request, $token, UserPasswordHasherInterface $encoder)
    {
        $reset_password =$this->entityManager->getRepository(ResetPassword::class)->findOneByToken($token);


        if (!$reset_password) {
            return $this->redirectToRoute('app_reset_password');
    }
    //Verifier sir le createdAt = maintenant -
    $now = new DateTimeImmutable();
    if ($now > $reset_password->getCreatedAt()->modify('+ 3 hours')) {
        
        $this->addFlash('notice', 'Votre de mande de mot de passe a expiré, merci de la renouveller');
        return $this->redirectToRoute('app_reset_password');
    }
    $form = $this->createForm(ResetPasswordType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid() ) {       
        $new_pwd = $form->get('new_password')->getData();

        //Encodage des mots de passe :
        $password = $encoder->hashPassword($reset_password->getUser(), $new_pwd);
        $reset_password->getUser()->setPassword($password);

        //Flush dans la base : 
        $this->entityManager->flush();

        //redrirection de l'utilisateur vers la page de connexion : 
        $this->addFlash(('notice'), 'Votre mot de passe à bien été mis à jour');
        return $this->redirectToRoute('app_login');


    }
    return $this->render('reset_password/update.html.twig',[
        'form'=>$form->createView()
    ]);

}
}  