<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Order;
use App\Entity\OrderDetails;
use App\Form\OrderType;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{

private $entityManager;

public function __construct(EntityManagerInterface $entityManager)
{
    $this->entityManager=$entityManager;
}




#[Route('/commande', name: 'app_order')]

public function index(Cart $cart, Request $request): Response
{
if (!$this->getUser()->getAddresses()->getValues()) 
{
return $this->redirectToRoute('app_account_adress_add');
}

$form=$this->createForm(OrderType::class, null, [
'user'=> $this->getUser()
]);

return $this->render('order/index.html.twig',[
'form' => $form->createView(),
'cart' => $cart->getFull()
]);
}

#[Route('/commande/recapitulatif', name: 'app_order_recap')]

public function add(Cart $cart, Request $request): Response
{
$form=$this->createForm(OrderType::class, null, [
'user'=> $this->getUser()
]);

$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {

$date = new DateTimeImmutable();
$carriers = $form->get('carriers')->getData();
$delivery = $form->get('addresses')->getData();
$delivery_content = $delivery->getFirstname().' '.$delivery->getLastname();
$delivery_content .= '<br/>'.$delivery->getPhone();

if ($delivery->getCompany()) {
$delivery_content .= '<br/>'.$delivery->getCompany();
}

$delivery_content .= '<br/>'.$delivery->getAddress();
$delivery_content .= '<br/>'.$delivery->getPostal().' '.$delivery->getCity();
$delivery_content .= '<br/>'.$delivery->getCountry();



//enregistrer ma commande 
$order = new Order();
$reference=$date->format('daY').'-'.uniqid();
$order->setReference($reference);
$order->setUser($this->getUser());
$order->setCreatedAt($date);
$order->setCarrierName($carriers->getName());
$order->setCarrierPrix($carriers->getPrix());
$order->setDelivery($delivery_content);
$order->setState(0);

$this->entityManager->persist($order);

//enregistrer mes produits 

foreach ($cart->getFull() as $product) {
    $orderDetails = new OrderDetails();
    $orderDetails->setMyOrder($order);
    $orderDetails->setProduct($product['product']->getName());
    $orderDetails->setQuantity($product['quantity']);
    $orderDetails->setPrix($product['product']->getPrix() );
    $orderDetails->setTotal($product['product']->getPrix() * $product['quantity']);
    $this->entityManager->persist($orderDetails);
        
}

$this->entityManager->flush();

return $this->render('order/add.html.twig',[
    'form' => $form,
    'cart' => $cart->getFull(),
    'carrier'=> $carriers,
    'delivery'=>$delivery_content,
    'reference'=>$order->getReference()
    ]);
}
    return $this-> redirectToRoute('app_cart');
}

}

