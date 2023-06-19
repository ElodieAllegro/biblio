<?php

namespace App\Controller\User;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

#[Route('/user', name:'userProfil_')]
class MainController extends AbstractController
{
    #[Route('/', name:'index')]
    public function index(): Response
    {
        return $this->render('userProfil/index.html.twig');
    }
}