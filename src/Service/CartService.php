<?php
namespace App\Service;

use App\Entity\Products;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService{

    private RequestStack $requestStack;
    private EntityManagerInterface $em;

    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
       $this->requestStack = $requestStack;
       $this->em = $em;
    }
    public function addToCart(int $id ):void{

        $card=$this->requestStack->getSession()->get('cart', []);

            if(empty($card[$id])){
                $card[$id]=1;
            }
            else{
                $card[$id]++;
            }

        $this->getSession()->set('cart',$card);
    }



    public function removeCartAll()
    {

        return $this->getSession()->remove('cart');
    }

    // public function decrease(int $id){
    //     $cart = $this->getSession()->get('cart',[]);
    //     if($cart[$id]> 1){
    //         $cart[$id] --;
    //     }
    //     else{
    //         unset($cart[$id]);
    //     }
    //     $this->getSession()->set('cart',$cart);

    // }
    public function decrease(int $id)
{
    $cart = $this->getSession()->get('cart', []);

    if (isset($cart[$id])) {
        if ($cart[$id] > 1) {
            $cart[$id]--;
        } else {
            unset($cart[$id]);
        }
    }

    $this->getSession()->set('cart', $cart);
}


    // donne le total du panier
    public function getTotal(): array
    {
        $cart = $this->getSession()->get('cart');
        $cartData = [];
    
        if (is_array($cart)) {
            foreach ($cart as $id => $quantity) {
                $product = $this->em->getRepository(Products::class)->findOneBy(['id' => $id]);
                if (!$product) {
                    // Supprime le produit puis continue en sortant de la boucle
                }
                $cartData[] = [
                    'product' => $product,
                    'quantity' => $quantity
                ];
            }
        }
    
        return $cartData;
    }

    public function removeToCart(int $id)
    {
        $cart = $this->getSession()->get('cart', []);
        unset($cart[$id]);
        return $this->getSession()->set('cart', $cart);
    }
    
    private function getSession(): SessionInterface
    {
        return $this->requestStack->getSession();
    }
    public function clearCart()
{
    $this->getSession()->set('cart', []);
}
    
}
