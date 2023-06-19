<?php

namespace App\Controller\Admin;

use App\Entity\Transporters;
use App\Form\TransportersFormType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\TransportersRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/transporteur', name: 'admin_transporters_')]
class TransporterController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(TransportersRepository $transportersRepository): Response
    {
        $transporters = $transportersRepository->findAll();
        return $this->render('admin/transporters/index.html.twig', compact('transporters'));
    }

    #[Route('/ajout', name: 'add')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $transporter = new Transporters();

        $transporterForm = $this->createForm(TransportersFormType::class, $transporter);

        $transporterForm->handleRequest($request);

        if ($transporterForm->isSubmitted() && $transporterForm->isValid()) {
            $entityManager->persist($transporter);
            $entityManager->flush();

            $this->addFlash('success', 'Transporteur ajouté avec succès');

            return $this->redirectToRoute('admin_transporters_index');
        }

        return $this->render('admin/transporters/add.html.twig', [
            'transporterForm' => $transporterForm->createView(),
        ]);
    }
    #[Route('/edition/{id}', name: 'edit')]
    
    public function edit(Transporters $transporter, Request $request, EntityManagerInterface $entityManager): Response
    {

        $transporterForm = $this->createForm(TransportersFormType::class, $transporter);

        $transporterForm->handleRequest($request);

        if ($transporterForm->isSubmitted() && $transporterForm->isValid()) {
            $entityManager->persist($transporter);
            $entityManager->flush();

            $this->addFlash('success', 'Transporteur ajouté avec succès');

            return $this->redirectToRoute('admin_transporters_index');
        }

        return $this->render('admin/transporters/add.html.twig', [
            'transporterForm' => $transporterForm->createView(),
        ]);


}
  #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Transporters $transporter, EntityManagerInterface $em): Response
    {
        $em->remove($transporter);
        $em->flush();
    
    
        return $this->redirectToRoute('admin_transporters_index');
    }


}
