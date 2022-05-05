<?php
return [

    'adapters' => [
        // Configuration for Elastic Search Adapter
        'elastic_search' => [
            'hosts' => explode(',', env('VEGVISIR_ELASTICSEARCH_HOSTS')),
        ],
    ],

];
