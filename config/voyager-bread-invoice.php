<?php

return [

    /*
     * If enabled for voyager-bread-invoice package.
     */
    'enabled' => env('VOYAGER_BREAD_INVOICE_ENABLED', true),

    /*
     * The config_key for voyager-bread-invoice package.
     */
    'config_key' => env('VOYAGER_BREAD_INVOICE_CONFIG_KEY', 'joy-voyager-bread-invoice'),

    /*
     * The route_prefix for voyager-bread-invoice package.
     */
    'route_prefix' => env('VOYAGER_BREAD_INVOICE_ROUTE_PREFIX', 'joy-voyager-bread-invoice'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadInvoice\\Http\\Controllers',
    ],
];
