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
        '/' => [[['_route' => 'list', '_controller' => 'App\\Controller\\ListController::showListChute'], null, null, null, false, false, null]],
        '/matiere' => [[['_route' => 'matiere', '_controller' => 'App\\Controller\\MatiereController::manageMatiere'], null, null, null, false, false, null]],
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
                .'|/use_chute/([^/]++)(*:188)'
                .'|/noUse_chute/([^/]++)(*:217)'
                .'|/delete_(?'
                    .'|chute/([^/]++)(*:250)'
                    .'|matiere/([^/]++)(*:274)'
                .')'
                .'|/edit_(?'
                    .'|chute/([^/]++)(*:306)'
                    .'|matiere/([^/]++)(*:330)'
                .')'
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
        188 => [[['_route' => 'use_chute', '_controller' => 'App\\Controller\\ListController::useChute'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'noUse_chute', '_controller' => 'App\\Controller\\ListController::noUseChute'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'delete_chute', '_controller' => 'App\\Controller\\ListController::deleteMatiere'], ['id'], null, null, false, true, null]],
        274 => [[['_route' => 'delete_matiere', '_controller' => 'App\\Controller\\MatiereController::deleteMatiere'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'edit_chute', '_controller' => 'App\\Controller\\ListController::editchute'], ['id'], null, null, false, true, null]],
        330 => [
            [['_route' => 'edit_matiere', '_controller' => 'App\\Controller\\MatiereController::editMatiere'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
