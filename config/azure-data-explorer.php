<?php

// config for ReedTech/AzureDataExplorer
return [
    /*
    |--------------------------------------------------------------------------
    | Azure Data Explorer
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the Azure Data Explorer package.
    |
    */

    // The base URL of the Azure Data Explorer API.
    'base_url' => env('AZURE_DATA_EXPLORER_BASE_URL', 'https://login.microsoftonline.com'),

    // The tenant ID of the Azure Data Explorer API.
    'tenant_id' => env('AZURE_DATA_EXPLORER_TENANT_ID'),

    // The client ID of the Azure Data Explorer API.
    'client_id' => env('AZURE_DATA_EXPLORER_CLIENT_ID'),

    // The client secret of the Azure Data Explorer API.
    'client_secret' => env('AZURE_DATA_EXPLORER_CLIENT_SECRET'),

    // The cache driver to use for caching responses.
    'cache_driver' => env('AZURE_DATA_EXPLORER_CACHE_DRIVER', 'redis'),

    // The cache TTL to use for caching responses.
    'cache_ttl' => env('AZURE_DATA_EXPLORER_CACHE_TTL', 3500),

    // The cluster of the Azure Data Explorer API.
    'cluster' => env('AZURE_DATA_EXPLORER_CLUSTER'),

    // The region of the Azure Data Explorer API.
    'region' => env('AZURE_DATA_EXPLORER_REGION'),

    // The database of the Azure Data Explorer API.
    'database' => env('AZURE_DATA_EXPLORER_DATABASE'),

];
