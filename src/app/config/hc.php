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
    'admin_url'                 => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Registration page
    |--------------------------------------------------------------------------
    |
    | You can allow users to register their account by themselves
    |
    */
    'allow_registration'        => false,

    /*
     |--------------------------------------------------------------------------
     | List of first segment in routes which do not require a language middleware
     |--------------------------------------------------------------------------
     */
    "noLanguage"                => ['auth', 'api', 'language', 'password', 'r', 'resources'],

    /*
     |--------------------------------------------------------------------------
     | Override honey comb package views
     |--------------------------------------------------------------------------
     |
     | Simply write which view do you want to replace to what view
     | 'package::view.name' => 'your.custom.view.name'
     |
     */
    "views"                     => [
        //
    ],

    /*
    |---------------------------------------------------------------------------
    | Redirect url
    |---------------------------------------------------------------------------
    */
    'auth_redirect'             => 'auth/login',

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
    'short_url_length'          => 5,

    /*
    |---------------------------------------------------------------------------
    | Banner prefix link
    |---------------------------------------------------------------------------
    */
    'banner_prefix'             => 'visual-info',

];
