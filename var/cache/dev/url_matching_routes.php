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
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:188)'
                    .'|wdt/([^/]++)(*:208)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:254)'
                            .'|router(*:268)'
                            .'|exception(?'
                                .'|(*:288)'
                                .'|\\.css(*:301)'
                            .')'
                        .')'
                        .'|(*:311)'
                    .')'
                .')'
                .'|/language(?:/([^/]++))?(*:344)'
                .'|/([^/]++)/meals/meal(?:/([^/]++)(?:/([^/]++))?)?(*:400)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        188 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        208 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        254 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        268 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        288 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        301 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        311 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        344 => [[['_route' => 'language_switch', '_locale' => 'en', '_controller' => 'App\\Controller\\LanguageController::switchLanguage'], ['_locale'], null, null, false, true, null]],
        400 => [
            [['_route' => 'meal', 'name' => null, 'type' => null, '_controller' => 'App\\Controller\\MealController::index'], ['_locale', 'name', 'type'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
