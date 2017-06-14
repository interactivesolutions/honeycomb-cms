<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin url prefix for all admin routes
    |--------------------------------------------------------------------------
    |
    | You can add custom prefix for admin urls. Instead of "/admin" you can set this to any name that you want
    | By default admin url is "/admin"
    |
    */
    'admin_url' => env('HC_ADMIN_URL', 'admin'),

    /*
     |--------------------------------------------------------------------------
     | Override honey comb package views
     |--------------------------------------------------------------------------
     |
     | Simply write which view do you want to replace to what view
     | 'package::view.name' => 'your.custom.view.name'
     |
     */
    "views" => [
        //
    ],

    /**
     * Redirect url
     */
    'auth_redirect' => env('AUTH_REDIRECT', 'auth/login'),

    /**
     * Lifespan expand time
     */
    'api_token_lifespan_expand' => env('HC_API_TOKEN_LIFESPAN_EXPAND', 0),

    /**
     * Short url length
     */
    'short_url_length' => env('SHORT_URL_LENGTH', 5),

];
