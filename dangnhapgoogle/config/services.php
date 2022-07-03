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

        'client_id' => '1010239637260-abjo5p6gmpv7opnqc8i92cbrj97am8ja.apps.googleusercontent.com',

        'client_secret' => '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',

        'redirect' => 'http://127.0.0.1:8000/callback/google',

      ],
      'github' => [
        'client_id' => '43076946b474f00c9eca',
        'client_secret' => 'c9b15df1710d613d9489d8dfdf21627a991b5a35',
        'redirect' => 'http://127.0.0.1:8000/callback/github',
      ],

];
