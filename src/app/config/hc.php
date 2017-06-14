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
    'admin_url' => 'admin',

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

    /*
    |---------------------------------------------------------------------------
    | Redirect url
    |---------------------------------------------------------------------------
    */
    'auth_redirect' => 'auth/login',

    /*
    |---------------------------------------------------------------------------
    | Lifespan expand time
    |---------------------------------------------------------------------------
    */
    'api_token_lifespan_expand' => 0,

    /*
    |---------------------------------------------------------------------------
    | Short url length
    |---------------------------------------------------------------------------
    */
    'short_url_length' => 5,

];
