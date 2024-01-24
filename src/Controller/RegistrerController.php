<?php

namespace App\Controller;

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

    // private $entityManager;

    // public function _construct(EntityManagerInterface $entityManager) {
    //     $this->entityManager = $entityManager;
    // }

    #[Route('/inscription', name: 'app_registrer')]
    public function index(Request $request,EntityManagerInterface $entityManager, UserPasswordHasherInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $user = $form->getData();
            
            $password = $encoder->hashPassword($user,$user->getPassword());

            $user->setPassword($password);

            $entityManager->persist($user);
            $entityManager->flush();
        }

        return $this->render('registrer/index.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'RegistrerController',
        ]);
    }
}
