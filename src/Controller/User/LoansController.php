<?php
namespace App\Controller\User;

use App\Entity\OrdersDetails;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




#[Route('/user/emprunt', name: 'userProfil_loans_')]
class LoansController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $user = $this->getUser(); // je récupère l'utilisateur connecté
        $loans = $user->getOrders(); // je récupère les commandes de l'utilisateur

        return $this->render('userProfil/loans/index.html.twig', [
            'loans' => $loans
        ]);
    }
    
}











// #[Route('/user/emprunt', name: 'userProfil_loans_')]
// class LoansController extends AbstractController
// {
//     #[Route('/', name: 'index')]
//     public function index(): Response
//     {
//         $user = $this->getUser(); // je récupère l'utilisateur connecté
//         $loans = $user->getOrders(); // je recupère les commandes de l'utilisateur

//         return $this->render('userProfil/loans/index.html.twig', [
//             'loans' => $loans
//         ]);
//     }
// } 