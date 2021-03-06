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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\DefaultController::accueil'], null, null, null, false, false, null]],
        '/recherche' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\DefaultController::recherche'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\DefaultController::contact'], null, null, null, false, false, null]],
        '/politique' => [[['_route' => 'politique', '_controller' => 'App\\Controller\\DefaultController::politique'], null, null, null, false, false, null]],
        '/admin/gestion' => [[['_route' => 'gestion', '_controller' => 'App\\Controller\\GestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/message' => [[['_route' => 'message', '_controller' => 'App\\Controller\\MessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ajouter' => [[['_route' => 'ajout', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/vetement' => [[['_route' => 'Vetements', '_controller' => 'App\\Controller\\ProduitController::vetement'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/jardin' => [[['_route' => 'Jardin', '_controller' => 'App\\Controller\\ProduitController::jardin'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/maison' => [[['_route' => 'Maison', '_controller' => 'App\\Controller\\ProduitController::maison'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/puericulture' => [[['_route' => 'Puericulture', '_controller' => 'App\\Controller\\ProduitController::puericulture'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/multimedia' => [[['_route' => 'Multimedia', '_controller' => 'App\\Controller\\ProduitController::multimedia'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/livre' => [[['_route' => 'Livres', '_controller' => 'App\\Controller\\ProduitController::livre'], null, ['GET' => 0], null, false, false, null]],
        '/categories/annonce' => [[['_route' => 'annonce', '_controller' => 'App\\Controller\\ProduitController::annonces'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\UserController::profil'], null, null, null, false, false, null]],
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
                .'|/edit/(\\d+)(*:180)'
                .'|/delete/(\\d+)(*:201)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        180 => [[['_route' => 'edit_profil', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, true, null]],
        201 => [
            [['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
