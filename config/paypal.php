<?php


return [
    'client_id' => env('PAYPAL_CLIENT_ID'),
    'secret' => env('PAYPAL_SECRET'),

    'settings' => [
        'mode' => env('PAYPAL_MODE'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => false,
        'log.FileName' => storage_path ('/log/paypal.log'),
        'log.LogLevel' => 'ERROR'
    ]

];

