<?php

namespace App\Controller;

use App\Form\ChangepasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;


class AccountPasswordController extends AbstractController
{
    #[Route('/compte/modifier-mon-mot-de-passe', name: 'app_account_password')]

    #[Route('/inscription', name: 'app_registrer')]
    
    public function index(Request $request,EntityManagerInterface $entityManager, UserPasswordHasherInterface $encoder): Response  
      {

        $notification = null;

        $user = $this->getUser();
        $form=$this->createForm(ChangepasswordType::class,$user);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $old_pwd = $form->get('old_password')->getData();
            
            
            if ($encoder->isPasswordValid($user, $old_pwd)) {               
                $new_pwd=$form->get('new_password')->getData();
                $password = $encoder->hashPassword($user, $new_pwd);

                $user->setPassword($password);
                $entityManager->flush();
                $notification = "Votre mot de passe a été correctement modifié";
        }else {
            $notification = "Votre mot de passe actuel n'est pas le bon";
        }
    }

        return $this->render('account/password.html.twig',[
            'form' => $form->createView(),
            'notification' => $notification
        ]);
    }
}
