<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' =>'425249723260-ooin2f5tloueguelrh0f6rvgdp97n9q2.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/google/login',
    ],
    'linkedin' => [
        'client_id' =>'864ga0zdnguoe2',
        'client_secret' => 'xvhHaVmo7LxM1KRJ',
        'redirect' => 'http://localhost:8000/linkedin/login',
    ],
   

];
