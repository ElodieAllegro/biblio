<?php




namespace App\Controller;

use App\Entity\Users;
use App\Entity\Products;
use App\Entity\Orders;
use App\Form\OrdersTypeForm;
use App\Service\CartService;
use App\Entity\OrdersDetails;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\TransportersRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class OrdersController extends AbstractController
{
    
            private $em;
        
            public function __construct(EntityManagerInterface $em)
            {
                $this->em = $em;
            }
        
            #[Route('/commande/creer', name: 'orders_index')]
            public function index(CartService $cartService, TransportersRepository $transportersRepository, UsersRepository $usersRepository): Response
            {
                if (!$this->getUser()) {
                    return $this->redirectToRoute('app_login');
                }
        
                $user = $this->getUser();
                $form = $this->createForm(OrdersTypeForm::class, null, [
                    'user' => $user,
                ]);
               
        
        
                return $this->render('orders/index.html.twig',[
                'form' => $form->createView(),
                'recapCart' => $cartService->getTotal()
        ]);
        
            }

    #[Route('/commande/verifier', name: 'orders_prepare', methods: ['POST'])]
    public function prepareOrder(Request $request, CartService $cartService): Response
    {
    
        $form = $this->createForm(OrdersTypeForm::class, null,[
            'user' => $this-> getUser()
        ]);
        $form -> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dateTimeImmutable = new \DateTimeImmutable('now');
            $transporters = $form->get('transporters')->getData();

            // Création de l'instance Orders
            foreach ($cartService->getTotal() as $products){
            $order = new Orders();
            $reference = $dateTimeImmutable->format('d.m.Y')."-".uniqid();
            $order->setUsers($this->getUser());
            $order->setReference($reference);
            $order->setProducts($products['product']);
            $order->setTransportersName($transporters->getTitle());
            $order->setTransportersPrice($transporters->getPrice());

            // Persiste l'instance Orders
            $this->em->persist($order);
            // $this->em->flush(); // Exécute les opérations persistées
        }
            // Crée les instances OrdersDetails pour chaque produit dans le panier
            foreach ($cartService->getTotal() as $products) {
                $ordersDetails = new OrdersDetails();
                $ordersDetails->setOrders($order); // Associe l'instance Orders à OrdersDetails
                $ordersDetails->setProducts($products['product']); // Définit le produit
                $ordersDetails->setQuantity($products['quantity']); // Définit la quantité
                $ordersDetails->setPrice($products['product']->getPrice()); // Définit le prix

                // Déduction du stock
                $productEntity = $products['product'];
                $productEntity->setStock($productEntity->getStock() - $products['quantity']);

                // Persiste l'instance OrdersDetails
                $this->em->persist($ordersDetails);
            }

            $this->em->flush(); 

            $cartService->clearCart();

            return $this->redirectToRoute('main'); 
        }

        
    }

    
}















// class OrdersController extends AbstractController
// {
//     private $em;

//     public function __construct(EntityManagerInterface $em)
//     {
//         $this->em = $em;
//     }

//     #[Route('/commande/creer', name: 'orders_index')]
//     public function index(CartService $cartService, TransportersRepository $transportersRepository, UsersRepository $usersRepository): Response
//     {
//         if (!$this->getUser()) {
//             return $this->redirectToRoute('app_login');
//         }

//         $user = $this->getUser();
//         $form = $this->createForm(OrdersTypeForm::class, null, [
//             'user' => $user,
//         ]);
       


//         return $this->render('orders/index.html.twig',[
//         'form' => $form->createView(),
//         'recapCart' => $cartService->getTotal()
// ]);

//     }
//     #[Route('/commande/verifier', name: 'orders_prepare', methods: ['POST'])]
//     public function prepareOrder(Request $request, CartService $cartService): Response
//     {
//         $form = $this->createForm(OrdersTypeForm::class, null,[
//             'user' => $this-> getUser()
//         ]);
//         $form -> handleRequest($request);

//         if ($form->isSubmitted() && $form->isValid()) {
//             $dateTimeImmutable = new \DateTimeImmutable('now');
//             $transporters = $form->get('transporters')->getData();

//             $order = new Orders();
         
//             $reference = $dateTimeImmutable->format('d.m.Y')."-".uniqid();
//             $order->setUsers($this->getUser());
         
//             $order->setReference($reference);
//             // $order->setCreatedAt($dateTimeImmutable);
//             $order->setTransportersName($transporters->getTitle());
//             $order->setTransportersPrice($transporters->getPrice());
//             $order->setProducts($order->getProducts());
//             dd($order);
            
//             $this->em->persist($order);

//             foreach($cartService->getTotal()as $products){
//                    dd($cartService);
//             }
//                     $ordersDetails = new OrdersDetails();
//                     $ordersDetails->setProducts($order->getProducts());

                
                   

                    
//                     dd($order);
              
//                 // }
               
//         }


          
//         return $this->render('orders/prepare.html.twig');
//     }
// }





                    // $ordersDetails->setOrders($order->getProducts());
                    // dd($products);
                    // // $ordersDetails->setQuantity($products);
                    // // $ordersDetails->setPrice($products['product']->getPrice());
                    // // $ordersDetails->setProducts($products['product']->getName());







    //     $recapCart = $cartService->getTotal();
    //     $transporters = $transportersRepository->findAll();
    //     $user = $this->getUser();
    //     $address = $user->getAddress();

    //     return $this->render('orders/index.html.twig', [
    //         'recapCart' => $recapCart,
    //         'address' => $address,
    //         'transporters' => $transporters,
    //         'user' => $user,
    //     ]);
    // }

    // #[Route('/commande/details', name: 'orders_details')]
    // public function createOrder(Request $request, EntityManagerInterface $entityManager, CartService $cartService): Response
    // {
    //     $user = $this->getUser();

    //     if (!$user) {
    //         return $this->redirectToRoute('app_login');
    //     }

    //     $order = new Orders();
    //     $orderForm = $this->createForm(OrdersTypeForm::class, $order);
    //     $orderForm->handleRequest($request);

        

    //     return $this->render('orders/details.html.twig', [
    //         'orderform' => $orderForm->createView(),
    //     ]);
    // }



// namespace App\Controller;

// use App\Entity\Orders;
// use App\Entity\Users;
// use App\Form\OrdersTypeForm;
// use App\Service\CartService;
// use App\Repository\UsersRepository;
// use App\Repository\TransportersRepository;
// use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// class OrdersController extends AbstractController
// {
//     #[Route('/commande/creer', name: 'orders_index')]
//     public function index(CartService $cartService, TransportersRepository $transportersRepository, UsersRepository $usersRepository): Response
//     {
//         if (!$this->getUser()) {
//             return $this->redirectToRoute('app_login');
//         }

//         $recapCart = $cartService->getTotal();
//         $transporters = $transportersRepository->findAll();
//         $user = $this->getUser();
//         $address = $user->getAddress();

//         return $this->render('orders/index.html.twig', [
//             'recapCart' => $recapCart,
//             'address' => $address,
//             'transporters' => $transporters,
//             'user' => $user,
//         ]);
//     }

//     #[Route('/commande/details', name: 'orders_details')]
// public function createOrder(Request $request, EntityManagerInterface $entityManager, CartService $cartService)
// {
//     $user = $this->getUser();

//     if (!$user) {
//         return $this->redirectToRoute('app_login');
//     }

//     $order = new Orders();
//     $orderForm = $this->createForm(OrdersTypeForm::class, $order);
//     $orderForm->handleRequest($request);

//     if ($orderForm->isSubmitted() && $orderForm->isValid()) {
//         // Remplir les autres champs de l'entité Order en fonction des données du formulaire
     

//         // Enregistrer la commande en base de données
//         $entityManager->persist($order);
//         $entityManager->flush();

       
//     }

//     return $this->render('orders/details.html.twig', [
//         'orderform' => $orderForm->createView(),
//     ]);
// }

// }













































// namespace App\Controller;

// use App\Entity\Orders;
// use App\Entity\Users;
// use App\Form\OrdersTypeForm;
// use App\Service\CartService;
// use App\Repository\UsersRepository;
// use Doctrine\ORM\EntityManagerInterface;
// use App\Repository\TransportersRepository;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// class OrdersController extends AbstractController
// {
//     #[Route('/commande/creer', name: 'orders_index')]
//     public function index(CartService $cartService, TransportersRepository $transportersRepository, UsersRepository $usersRepository): Response
//     {
//         if (!$this->getUser()) {
//             return $this->redirectToRoute('app_login');
//         }
//         $users = new Users;
//         $recapCart = $cartService->getTotal();
//         $transporters = $transportersRepository->findAll();
//         $address = $usersRepository->findOneBy(['id' => $this->getUser()->getId()])->getAddress();
        

//         return $this->render('orders/index.html.twig', [
//             'recapCart' => $recapCart,
//             'address' => $address,
//             'transporters' => $transporters,
//             'users'=>$users,
//         ]);
//     }
//     #[Route('/commande/details', name: 'orders_details')]
//     public function createOrder(Request $request, EntityManagerInterface $entityManager)
// {
//     $order = new Orders();
//     $form = $this->createForm(OrdersTypeForm::class, $order);
//     $form->handleRequest($request);

//     if ($form->isSubmitted() && $form->isValid()) {
//         // Remplir les autres champs de l'entité Order en fonction des données du formulaire

//         // Enregistrer l'entité Order en base de données
//         $entityManager->persist($order);
//         $entityManager->flush();

//         // Rediriger ou afficher un message de confirmation
//     }

//     // Afficher le formulaire de commande
//     return $this->render('orders/details.html.twig', [
//         'form' => $form->createView(),
//     ]);
// }
// } 

