<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'list' => [[], ['_controller' => 'App\\Controller\\ListController::showListChute'], [], [['text', '/']], [], []],
    'use_chute' => [['id'], ['_controller' => 'App\\Controller\\ListController::useChute'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/use_chute']], [], []],
    'noUse_chute' => [['id'], ['_controller' => 'App\\Controller\\ListController::noUseChute'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/noUse_chute']], [], []],
    'delete_chute' => [['id'], ['_controller' => 'App\\Controller\\ListController::deleteMatiere'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_chute']], [], []],
    'edit_chute' => [['id'], ['_controller' => 'App\\Controller\\ListController::editchute'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit_chute']], [], []],
    'matiere' => [[], ['_controller' => 'App\\Controller\\MatiereController::manageMatiere'], [], [['text', '/matiere']], [], []],
    'edit_matiere' => [['id'], ['_controller' => 'App\\Controller\\MatiereController::editMatiere'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit_matiere']], [], []],
    'delete_matiere' => [['id'], ['_controller' => 'App\\Controller\\MatiereController::deleteMatiere'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_matiere']], [], []],
];
