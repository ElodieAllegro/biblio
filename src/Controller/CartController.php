<?php

namespace App\Controller;

use App\Service\CartService;
use App\Entity\Products;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    #[Route('/panier', name: 'cart_index')]
    public function index(CartService $cartService): Response
    {
        
        return $this->render('cart/index.html.twig',[
            'cart'=>$cartService->getTotal() 
            ]);
}


    #[Route('/panier/ajout/{id<\d+>}', name: 'cart_add')]
    public function addToRoute(CartService $cartService, int $id): Response
    {
        $cartService->addToCart($id);

        return $this->redirectToRoute('cart_index');
    }


    #[Route('/panier/supprimer', name: 'cart_removeAll')]
    public function removeCarteAll(CartService $cartService): Response
    {
        $cartService->removeCartAll();

        return $this->redirectToRoute('cart_index');
    }


    #[Route('/panier/enlever/{id<\d+>}', name: 'cart_remove')]
    public function removetoCart(CartService $cartService, int $id): Response
    {
        $cartService->removetoCart($id);

        return $this->redirectToRoute('cart_index');

    }
    #[Route('/panier/decrease/{id<\d+>}', name: 'cart_decrease')]
    public function decrease(CartService $cartService, int $id): Response
    {
        $cartService->decrease($id);

        return $this->redirectToRoute('cart_index');
    }

        
}
