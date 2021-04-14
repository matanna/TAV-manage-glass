<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'list', '_controller' => 'App\\Controller\\ListController::showListChute'], null, null, null, false, false, null]],
        '/matiere' => [[['_route' => 'matiere', '_controller' => 'App\\Controller\\MatiereController::manageMatiere'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/use_chute/([^/]++)(*:26)'
                .'|/noUse_chute/([^/]++)(*:54)'
                .'|/delete_(?'
                    .'|chute/([^/]++)(*:86)'
                    .'|matiere/([^/]++)(*:109)'
                .')'
                .'|/edit_(?'
                    .'|chute/([^/]++)(*:141)'
                    .'|matiere/([^/]++)(*:165)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'use_chute', '_controller' => 'App\\Controller\\ListController::useChute'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'noUse_chute', '_controller' => 'App\\Controller\\ListController::noUseChute'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'delete_chute', '_controller' => 'App\\Controller\\ListController::deleteMatiere'], ['id'], null, null, false, true, null]],
        109 => [[['_route' => 'delete_matiere', '_controller' => 'App\\Controller\\MatiereController::deleteMatiere'], ['id'], null, null, false, true, null]],
        141 => [[['_route' => 'edit_chute', '_controller' => 'App\\Controller\\ListController::editchute'], ['id'], null, null, false, true, null]],
        165 => [
            [['_route' => 'edit_matiere', '_controller' => 'App\\Controller\\MatiereController::editMatiere'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
