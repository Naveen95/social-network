<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '1694445737471213',
    'client_secret' => '471768008bda686652eb66fbcf133873',
    'redirect' => 'http://localhost:8000/callback/facebook',
    ],

    'twitter' => [
    'client_id' => ' r0tYS2fxJ2vMG8WvhMHBMgwx4',
    'client_secret' => ' b6qb4gEqeSz8sJIPeEquoElnpQYB7qxwGknQJesgfynf2ZuT6W',
    'redirect' => 'http://localhost:8000/callback/twitter',
    ],

    'google' => [
    'client_id' => '770950382717-ppj5c28ucburcifbsse0k883rkaqg2sv.apps.googleusercontent.com',
    'client_secret' => 'tZRa0KGNEUEHXCWpW9XUCTgC',
    'redirect' => 'http://localhost:8000/callback/google',
    ],

];
