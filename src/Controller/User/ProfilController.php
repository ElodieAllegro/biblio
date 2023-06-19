<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/user/profil', name: 'userProfil_profil_')]
class ProfilController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $user = $this->getUser(); // je recupère l'utilisateur connecté

        return $this->render('userProfil/profil/index.html.twig', [
            'user' => $user,
        ]);
    }
}






