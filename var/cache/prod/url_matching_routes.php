<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/compte/addresses' => [[['_route' => 'app_account_adress', '_controller' => 'App\\Controller\\AccountAdressController::index'], null, null, null, false, false, null]],
        '/compte/ajouter-une-adresse' => [[['_route' => 'app_account_adress_add', '_controller' => 'App\\Controller\\AccountAdressController::add'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/compte/mes-commandes' => [[['_route' => 'app_account_order', '_controller' => 'App\\Controller\\AccountOrderController::index'], null, null, null, false, false, null]],
        '/compte/modifier-mon-mot-de-passe' => [[['_route' => 'app_account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'remove_my_cart', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recapitulatif' => [[['_route' => 'app_order_recap', '_controller' => 'App\\Controller\\OrderController::add'], null, null, null, false, false, null]],
        '/nos-produits' => [[['_route' => 'app_products', '_controller' => 'App\\Controller\\ProductsController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_registrer', '_controller' => 'App\\Controller\\RegistrerController::index'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|om(?'
                        .'|pte/(?'
                            .'|m(?'
                                .'|odifier\\-une\\-adresse/([^/]++)(*:58)'
                                .'|es\\-commandes/([^/]++)(*:87)'
                            .')'
                            .'|supprimer\\-une\\-adresse/([^/]++)(*:127)'
                        .')'
                        .'|mande/(?'
                            .'|erreur/([^/]++)(*:160)'
                            .'|merci/([^/]++)(*:182)'
                            .'|create\\-session/([^/]++)(*:214)'
                        .')'
                    .')'
                    .'|art/(?'
                        .'|add/([^/]++)(*:243)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:269)'
                            .'|crease/([^/]++)(*:292)'
                        .')'
                    .')'
                .')'
                .'|/produit/([^/]++)(*:320)'
                .'|/mofifier\\-mon\\-mot\\-de\\-passe/([^/]++)(*:367)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        58 => [[['_route' => 'app_account_adress_edit', '_controller' => 'App\\Controller\\AccountAdressController::edit'], ['id'], null, null, false, true, null]],
        87 => [[['_route' => 'app_account_order_show', '_controller' => 'App\\Controller\\AccountOrderController::show'], ['reference'], null, null, false, true, null]],
        127 => [[['_route' => 'app_account_adress_delete', '_controller' => 'App\\Controller\\AccountAdressController::delete'], ['id'], null, null, false, true, null]],
        160 => [[['_route' => 'order_cancel', '_controller' => 'App\\Controller\\OrderCancelController::index'], ['stripeSessionId'], null, null, false, true, null]],
        182 => [[['_route' => 'order_validate', '_controller' => 'App\\Controller\\OrderSuccessController::index'], ['stripeSessionId'], null, null, false, true, null]],
        214 => [[['_route' => 'stripe_create_session', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null]],
        243 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'delete_to_cart', '_controller' => 'App\\Controller\\CartController::deleteFromCart'], ['id'], null, null, false, true, null]],
        292 => [[['_route' => 'decrease_to_cart', '_controller' => 'App\\Controller\\CartController::decreaseFromCart'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductsController::show'], ['slug'], null, null, false, true, null]],
        367 => [
            [['_route' => 'app_update_password', '_controller' => 'App\\Controller\\ResetPasswordController::update'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
