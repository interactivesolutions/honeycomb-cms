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

];
