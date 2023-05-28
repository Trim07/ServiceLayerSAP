<?php

return [
    "https" => env('SERVICE_LAYER_HTTPS', true),
    "host" => env('SERVICE_LAYER_HOST'),
    "port" => env('SERVICE_LAYER_PORT', 50000),
    "sslOptions" => [
        "cafile" => env('SERVICE_LAYER_SSL_CAFILE'),
        "verify_peer" => env('SERVICE_LAYER_SSL_VERIFY_PEER', false),
        "verify_peer_name" => env('SERVICE_LAYER_SSL_PEER_NAME', false),
    ],
    "version" => env('SERVICE_LAYER_VERSION', 2)
];

?>