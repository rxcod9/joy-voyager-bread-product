<?php

return [

    /*
     * If enabled for voyager-bread-product package.
     */
    'enabled' => env('VOYAGER_BREAD_PRODUCT_ENABLED', true),

    /*
     * The config_key for voyager-bread-product package.
     */
    'config_key' => env('VOYAGER_BREAD_PRODUCT_CONFIG_KEY', 'joy-voyager-bread-product'),

    /*
     * The route_prefix for voyager-bread-product package.
     */
    'route_prefix' => env('VOYAGER_BREAD_PRODUCT_ROUTE_PREFIX', 'joy-voyager-bread-product'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadProduct\\Http\\Controllers',
    ],
];
