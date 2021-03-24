<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\DefaultController::accueil'], [], [['text', '/']], [], []],
    'recherche' => [[], ['_controller' => 'App\\Controller\\DefaultController::recherche'], [], [['text', '/recherche']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\DefaultController::contact'], [], [['text', '/contact']], [], []],
    'politique' => [[], ['_controller' => 'App\\Controller\\DefaultController::politique'], [], [['text', '/politique']], [], []],
    'gestion' => [[], ['_controller' => 'App\\Controller\\GestionController::new'], [], [['text', '/admin/gestion']], [], []],
    'message' => [[], ['_controller' => 'App\\Controller\\MessageController::new'], [], [['text', '/message']], [], []],
    'ajout' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/ajouter']], [], []],
    'Vetements' => [[], ['_controller' => 'App\\Controller\\ProduitController::vetement'], [], [['text', '/categorie/vetement']], [], []],
    'Jardin' => [[], ['_controller' => 'App\\Controller\\ProduitController::jardin'], [], [['text', '/categorie/jardin']], [], []],
    'Maison' => [[], ['_controller' => 'App\\Controller\\ProduitController::maison'], [], [['text', '/categorie/maison']], [], []],
    'Puericulture' => [[], ['_controller' => 'App\\Controller\\ProduitController::puericulture'], [], [['text', '/categorie/puericulture']], [], []],
    'Multimedia' => [[], ['_controller' => 'App\\Controller\\ProduitController::multimedia'], [], [['text', '/categorie/multimedia']], [], []],
    'Livres' => [[], ['_controller' => 'App\\Controller\\ProduitController::livre'], [], [['text', '/categorie/livre']], [], []],
    'annonce' => [[], ['_controller' => 'App\\Controller\\ProduitController::annonces'], [], [['text', '/categories/annonce']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/inscription']], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\UserController::profil'], [], [['text', '/profil']], [], []],
    'edit_profil' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/edit']], [], []],
    'delete_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/delete']], [], []],
];
