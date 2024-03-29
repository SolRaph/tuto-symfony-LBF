<?php

namespace App\Controller\Admin;

use App\Classe\Mail;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class OrderCrudController extends AbstractCrudController
{

    private $entityManager;
    private $adminUrlGenerator;
    public function __construct(EntityManagerInterface $entityManager, AdminUrlGenerator $adminUrlGenerator)
    {
        $this->entityManager = $entityManager;
        $this->adminUrlGenerator = $adminUrlGenerator;
    }

    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

    public function configureActions(Actions $actions): Actions
    {

        $updatePreparation = Action::new('updatePreparation', 'Préparation en cours', 'fa-solid fa-box')->linkToCrudAction('updatePreparation');
        $updateLivraison = Action::new('updateLivraison', 'Livraison en cours', 'fa-solid fa-truck-fast')->linkToCrudAction('updateLivraison');



        return $actions
            ->add('detail', $updateLivraison)
            ->add('detail', $updatePreparation)
            ->add('index','detail');
    }

    public function updatePreparation(AdminContext $context)
    {
        $order = $context->getEntity()->getInstance();
        $order->setState(2);
        $this->entityManager->flush();

        $this->addFlash('notice', "<span style='color:green;'><strong>La commande ".$order->getReference()."est bien en cours de préparation</strong></span>");

        $url = $this->adminUrlGenerator
            ->setController(OrderCrudController::class)
            ->setAction('index')
            ->generateUrl();

            $mail = new Mail();
            $content = 'Bonjour  ' .$order->getUser()->getFirstname()."<br/>Votre commande est en cours de préparation";
            $mail->send($order->getUser()->getEmail(),$order->getUser()->getFirstname(), 'Votre commande La Boutique Française', $content);


        return $this->redirect($url);    
    }


    public function updateLivraison(AdminContext $context)
    {
        $order = $context->getEntity()->getInstance();
        $order->setState(3);
        $this->entityManager->flush();

        $this->addFlash('notice', "<span style='color:green;'><strong>La commande ".$order->getReference()."est bien en cours de livraison</strong></span>");

        $url = $this->adminUrlGenerator
            ->setController(OrderCrudController::class)
            ->setAction('index')
            ->generateUrl();

            $mail = new Mail();
            $content = 'Bonjour  ' .$order->getUser()->getFirstname()."<br/>Votre commande est en cours de livraison";
            $mail->send($order->getUser()->getEmail(),$order->getUser()->getFirstname(), 'Votre commande La Boutique Française', $content);


        return $this->redirect($url);    
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setDefaultSort(['id'=>'DESC']);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            DateTimeField::new('createdAt', 'Passée le'),
            TextField::new('user.getFullname', 'Utilisateurs'),
            TextEditorField::new('delivery', 'Adresse')->onlyOnDetail()->formatValue(function ($value, $entity) {
                return $value; // Désactive l'échappement HTML
            }),
            MoneyField::new('total', 'Total produit')->setCurrency('EUR'),
            TextField::new('carrierName', 'Transporteur'),
            MoneyField::new('carrierPrix', 'Frais de port')->setCurrency('EUR'),
            ChoiceField::new('state')->setChoices([
                'Non payée'=>0,
                'Payée'=>1,
                'Préparation en cours'=>2,
                'Livraison en cours'=>3
            ]),
            ArrayField::new('orderDetails', 'produits achetés')->hideOnIndex()
        ];
    }

}
