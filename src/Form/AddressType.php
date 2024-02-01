<?php

namespace App\Form;

use App\Entity\Address;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'label' => "Nom de l'adresse :",
                'attr'=>[
                    'placeholder' => "Nommez votre adresse"
                ]
            ])
            ->add('firstname', TextType::class,[
                'label' => "Votre prénom :",
                'attr'=>[
                    'placeholder' => "Entrez votre prénom"
                ]
            ])
            ->add('lastname', TextType::class,[
                'label' => "Votre nom :",
                'attr'=>[
                    'placeholder' => "Entrez votre nom"
                ]
            ])
            ->add('company', TextType::class,[
                'label' => "Nom de la société : - (Facultatif)",
                'required' => false,
                'attr'=>[
                    'placeholder' => "Entrez le nom de votre société"
                ]
            ])
            ->add('address', TextType::class,[
                'label' => "Votre adresse :",
                'attr'=>[
                    'placeholder' => "* rue du ......."
                ]
            ])
            ->add('postal', TextType::class,[
                'label' => "Code postal :",
                'attr'=>[
                    'placeholder' => "Entrez le code postal de votre ville"
                ]
            ])
            ->add('city', TextType::class,[
                'label' => "Ville :",
                'attr'=>[
                    'placeholder' => "Entrez le nom de votre ville"
                ]
            ])
            ->add('country', CountryType::class,[
                'label' => "Pays :",
                'attr'=>[
                    'placeholder' => "Entrez le nom du pays"
                ]
            ])
            ->add('phone', TelType::class,[
                'label' => "N° de téléphone :",
                'attr'=>[
                    'placeholder' => "Entrez votre numéro de téléphone"
                ]
            ])
            ->add('submit', SubmitType::class,[
                'label'=> 'Valider',
                'attr' =>[
                    'class' => 'btn btn-info w-100 mt-4'
                ]
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
