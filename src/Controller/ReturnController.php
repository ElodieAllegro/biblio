<?php

namespace App\Controller;


use App\Entity\Orders;
use App\Entity\Products;
use App\Entity\OrdersDetails;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

class ReturnController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/retourner/{orderId}', name: 'return_order')]
    public function returnOrder(Request $request, int $orderId): Response
    {
        $order = $this->em->getRepository(Orders::class)->find($orderId);

        if (!$order) {
            throw $this->createNotFoundException('La commande spécifiée n\'existe pas.');
        }
        //je verifie si l'utilisateur connecté est le mm que l'utilisateur de la commande 
        $currentUser = $this->getUser();
        $orderUser = $order->getUser();
        // si c'est bon j'autorise l'accés sinon j'ecris un message 
        if ($currentUser !== $orderUser) {
            throw new AccessDeniedException('Vous n\'êtes pas autorisé à retourner cette commande.');
        }

        // je traite  le formulaire de retour de livre
        $form = $this->createForm(ReturnForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour le stock des livres retournés
            foreach ($order->getOrdersDetails() as $orderDetail) {
                $product = $orderDetail->getProduct();
                $returnedQuantity = $form->get('returnedProducts')->get($orderDetail->getId())->getData();
                $product->setStock($product->getStock() + $returnedQuantity);
            }

            // Marquer la commande comme retournée
            $order->setReturned(true);

            // Persiste les modifications
            $this->em->flush();

            // Rediriger vers une page de confirmation ou autre action
            return $this->redirectToRoute('return_confirmation');
        }

        return $this->render('return/order.html.twig', [
            'order' => $order,
            'form' => $form->createView(),
        ]);
    }
}
