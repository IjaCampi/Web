<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, null, null, true, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/reclamationUser' => [[['_route' => 'mes_reclamation_user', '_controller' => 'App\\Controller\\ReclamationController::reclamationUser'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\ReclamationController::front'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/avis/(?'
                    .'|([^/]++)/edit(*:64)'
                    .'|delete/([^/]++)(*:86)'
                .')'
                .'|/reclamation/(?'
                    .'|([^/]++)(?'
                        .'|(*:121)'
                        .'|/edit(*:134)'
                    .')'
                    .'|delete/([^/]++)(*:158)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['idA'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        86 => [[['_route' => 'avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], null, null, false, true, null]],
        121 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idR'], ['GET' => 0], null, false, true, null]],
        134 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idR'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        158 => [
            [['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
