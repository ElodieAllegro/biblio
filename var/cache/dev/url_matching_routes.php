<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories_index', '_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\MainController::index'], null, null, null, true, false, null]],
        '/admin/produits' => [[['_route' => 'admin_products_index', '_controller' => 'App\\Controller\\Admin\\ProductsController::index'], null, null, null, true, false, null]],
        '/admin/produits/ajout' => [[['_route' => 'admin_products_add', '_controller' => 'App\\Controller\\Admin\\ProductsController::add'], null, null, null, false, false, null]],
        '/admin/transporteur' => [[['_route' => 'admin_transporters_index', '_controller' => 'App\\Controller\\Admin\\TransporterController::index'], null, null, null, true, false, null]],
        '/admin/transporteur/ajout' => [[['_route' => 'admin_transporters_add', '_controller' => 'App\\Controller\\Admin\\TransporterController::add'], null, null, null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_users_index', '_controller' => 'App\\Controller\\Admin\\UsersController::index'], null, null, null, true, false, null]],
        '/panier' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/panier/supprimer' => [[['_route' => 'cart_removeAll', '_controller' => 'App\\Controller\\CartController::removeCarteAll'], null, null, null, false, false, null]],
        '/commande/creer' => [[['_route' => 'orders_index', '_controller' => 'App\\Controller\\OrdersController::index'], null, null, null, false, false, null]],
        '/commande/verifier' => [[['_route' => 'orders_prepare', '_controller' => 'App\\Controller\\OrdersController::prepareOrder'], null, ['POST' => 0], null, false, false, null]],
        '/orders/details' => [[['_route' => 'app_orders_details', '_controller' => 'App\\Controller\\OrdersDetailsController::index'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'products_index', '_controller' => 'App\\Controller\\ProductsController::index'], null, null, null, true, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/emprunt' => [[['_route' => 'userProfil_loans_index', '_controller' => 'App\\Controller\\User\\LoansController::index'], null, null, null, true, false, null]],
        '/user' => [[['_route' => 'userProfil_index', '_controller' => 'App\\Controller\\User\\MainController::index'], null, null, null, true, false, null]],
        '/user/profil' => [[['_route' => 'userProfil_profil_index', '_controller' => 'App\\Controller\\User\\ProfilController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|produits/(?'
                        .'|edition/([^/]++)(*:207)'
                        .'|suppression/(?'
                            .'|([^/]++)(*:238)'
                            .'|image/([^/]++)(*:260)'
                        .')'
                    .')'
                    .'|transporteur/(?'
                        .'|edition/([^/]++)(*:302)'
                        .'|suppression/([^/]++)(*:330)'
                    .')'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|ajout/(\\d+)(*:365)'
                        .'|enlever/(\\d+)(*:386)'
                        .'|decrease/(\\d+)(*:408)'
                    .')'
                    .'|roduits/([^/]++)(*:433)'
                .')'
                .'|/categories/([^/]++)(*:462)'
                .'|/retourner/([^/]++)(*:489)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => 'admin_products_edit', '_controller' => 'App\\Controller\\Admin\\ProductsController::edit'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'admin_products_delete', '_controller' => 'App\\Controller\\Admin\\ProductsController::delete'], ['id'], null, null, false, true, null]],
        260 => [[['_route' => 'admin_products_delete_image', '_controller' => 'App\\Controller\\Admin\\ProductsController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        302 => [[['_route' => 'admin_transporters_edit', '_controller' => 'App\\Controller\\Admin\\TransporterController::edit'], ['id'], null, null, false, true, null]],
        330 => [[['_route' => 'admin_transporters_delete', '_controller' => 'App\\Controller\\Admin\\TransporterController::delete'], ['id'], null, null, false, true, null]],
        365 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::addToRoute'], ['id'], null, null, false, true, null]],
        386 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::removetoCart'], ['id'], null, null, false, true, null]],
        408 => [[['_route' => 'cart_decrease', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        433 => [[['_route' => 'products_details', '_controller' => 'App\\Controller\\ProductsController::details'], ['slug'], null, null, false, true, null]],
        462 => [[['_route' => 'categories_list', '_controller' => 'App\\Controller\\CategoriesController::list'], ['slug'], null, null, false, true, null]],
        489 => [
            [['_route' => 'return_order', '_controller' => 'App\\Controller\\ReturnController::returnOrder'], ['orderId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
