<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/analyses' => [[['_route' => 'app_analyses', '_controller' => 'App\\Controller\\AnalysesController::index'], null, null, null, false, false, null]],
        '/exercises' => [[['_route' => 'app_exercises', '_controller' => 'App\\Controller\\ExercisesController::index'], null, null, null, false, false, null]],
        '/expense' => [[['_route' => 'app_expense', '_controller' => 'App\\Controller\\ExpenseController::index'], null, null, null, false, false, null]],
        '/food' => [[['_route' => 'app_food', '_controller' => 'App\\Controller\\FoodController::index'], null, null, null, false, false, null]],
        '/MealController/listFoods' => [[['_route' => 'meal_listFoods', '_controller' => 'App\\Controller\\MealController::listFoods'], null, ['GET' => 0], null, false, false, null]],
        '/meals/show' => [[['_route' => 'show', '_controller' => 'App\\Controller\\MealController::show'], null, null, null, false, false, null]],
        '/meals/salvaLista' => [[['_route' => 'salvaLista', '_controller' => 'App\\Controller\\MealController::salvaLista'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'app_menu', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, false, false, null]],
        '/recipe' => [[['_route' => 'app_recipe', '_controller' => 'App\\Controller\\RecipeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                    .')'
                .')'
                .'|/language(?:/([^/]++))?(*:180)'
                .'|/([^/]++)/meals/meal(?:/([^/]++)(?:/([^/]++))?)?(*:236)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        180 => [[['_route' => 'language_switch', '_locale' => 'en', '_controller' => 'App\\Controller\\LanguageController::switchLanguage'], ['_locale'], null, null, false, true, null]],
        236 => [
            [['_route' => 'meal', 'name' => null, 'type' => null, '_controller' => 'App\\Controller\\MealController::index'], ['_locale', 'name', 'type'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
