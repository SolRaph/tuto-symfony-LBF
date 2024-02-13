<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrerController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    #[Route('/inscription', name: 'app_registrer')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $encoder
        ): Response
    {

        $notification = null;
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $user = $form->getData();

            $search_email = $this->entityManager->getRepository(User::class)->findOneByEmail($user->getEmail());
            
            if (!$search_email) {
            
            $password = $encoder->hashPassword($user,$user->getPassword());

            $user->setPassword($password);

            $entityManager->persist($user);
            $entityManager->flush();

            $mail = new Mail();
            $content = 'Bonjour  ' .$user->getFirstname()."<br/>Merci pour votre inscription espece de petit bâtard";
            $mail->send($user->getEmail(),$user->getFirstname(), 'Bienvenue sur La Boutique Française', $content);

            $notification ='Votre inscription est validée';
            } else {
                
                $notification = "l'email est déjà pris";
            }
        }

        return $this->render('registrer/index.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'RegistrerController',
            'notification' =>$notification
        ]);
    }
}
