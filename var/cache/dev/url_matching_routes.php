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
        '/accounts/managers' => [[['_route' => 'accounts_managers_index', '_controller' => 'App\\Controller\\AccountsManagersController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/certificates' => [
            [['_route' => 'certificates_index', '_controller' => 'App\\Controller\\CertificatesController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
            [['_route' => 'certificates_showcertif', '_controller' => 'App\\Controller\\CertificatesController::showcertif'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
        ],
        '/clients' => [[['_route' => 'clients_index', '_controller' => 'App\\Controller\\ClientsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/domains' => [[['_route' => 'domains_index', '_controller' => 'App\\Controller\\DomainsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/exceptions' => [[['_route' => 'exceptions', '_controller' => 'App\\Controller\\ExceptionsController::index'], null, null, null, false, false, null]],
        '/hosts' => [[['_route' => 'hosts_index', '_controller' => 'App\\Controller\\HostsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/projects' => [[['_route' => 'projects_index', '_controller' => 'App\\Controller\\ProjectsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/servers' => [[['_route' => 'servers_index', '_controller' => 'App\\Controller\\ServersController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/accounts/managers/([^/]++)(?'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/c(?'
                    .'|ertificates/([^/]++)(?'
                        .'|(*:248)'
                        .'|/edit(*:261)'
                        .'|(*:269)'
                    .')'
                    .'|lients/([^/]++)(?'
                        .'|(*:296)'
                        .'|/edit(*:309)'
                        .'|(*:317)'
                    .')'
                .')'
                .'|/domains/([^/]++)(?'
                    .'|(*:347)'
                    .'|/edit(*:360)'
                    .'|(*:368)'
                .')'
                .'|/hosts/([^/]++)(?'
                    .'|(*:395)'
                    .'|/edit(*:408)'
                    .'|(*:416)'
                .')'
                .'|/projects/([^/]++)(?'
                    .'|/edit(*:451)'
                    .'|(*:459)'
                .')'
                .'|/servers/([^/]++)(?'
                    .'|(*:488)'
                    .'|/edit(*:501)'
                    .'|(*:509)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:535)'
                    .'|/edit(*:548)'
                    .'|(*:556)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        203 => [[['_route' => 'accounts_managers_edit', '_controller' => 'App\\Controller\\AccountsManagersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'accounts_managers_delete', '_controller' => 'App\\Controller\\AccountsManagersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        248 => [[['_route' => 'certificates_show', '_controller' => 'App\\Controller\\CertificatesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        261 => [[['_route' => 'certificates_edit', '_controller' => 'App\\Controller\\CertificatesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'certificates_delete', '_controller' => 'App\\Controller\\CertificatesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        296 => [[['_route' => 'clients_show', '_controller' => 'App\\Controller\\ClientsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'clients_edit', '_controller' => 'App\\Controller\\ClientsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [[['_route' => 'clients_delete', '_controller' => 'App\\Controller\\ClientsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        347 => [[['_route' => 'domains_show', '_controller' => 'App\\Controller\\DomainsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'domains_edit', '_controller' => 'App\\Controller\\DomainsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        368 => [[['_route' => 'domains_delete', '_controller' => 'App\\Controller\\DomainsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        395 => [[['_route' => 'hosts_show', '_controller' => 'App\\Controller\\HostsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        408 => [[['_route' => 'hosts_edit', '_controller' => 'App\\Controller\\HostsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        416 => [[['_route' => 'hosts_delete', '_controller' => 'App\\Controller\\HostsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        451 => [[['_route' => 'projects_edit', '_controller' => 'App\\Controller\\ProjectsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [[['_route' => 'projects_delete', '_controller' => 'App\\Controller\\ProjectsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        488 => [[['_route' => 'servers_show', '_controller' => 'App\\Controller\\ServersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        501 => [[['_route' => 'servers_edit', '_controller' => 'App\\Controller\\ServersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        509 => [[['_route' => 'servers_delete', '_controller' => 'App\\Controller\\ServersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        535 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        548 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        556 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
