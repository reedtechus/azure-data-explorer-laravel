![logo-print-hd-transparent](https://user-images.githubusercontent.com/77644584/200294033-8c4d0980-56ba-4443-96f0-9dde0753a4df.png)

# Azure Data Explorer SDK for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/reedtechus/azure-data-explorer-laravel.svg?style=flat-square)](https://packagist.org/packages/reedtechus/azure-data-explorer-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/reedtechus/azure-data-explorer-laravel/run-tests?label=tests)](https://github.com/reedtechus/azure-data-explorer-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/reedtechus/azure-data-explorer-laravel/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/reedtechus/azure-data-explorer-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/reedtechus/azure-data-explorer-laravel.svg?style=flat-square)](https://packagist.org/packages/reedtechus/azure-data-explorer-laravel)

This project is a Laravel package that allows you to connect to Azure Data Explorer and execute queries from your Laravel Application.

It is not endorsed or supported by [Microsoft](https://github.com/microsoft) in any way.

## Goals

The goal of this project is to implement the [Azure Data Explorer REST API](https://learn.microsoft.com/en-us/azure/data-explorer/kusto/api/rest/) via a Laravel friendly interface.

## Installation

You can install the package via composer:

```bash
composer require reedtechus/azure-data-explorer-laravel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="azure-data-explorer-laravel-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="azure-data-explorer-laravel-config"
```

This is the contents of the published config file:

```php
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
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="azure-data-explorer-laravel-views"
```

## Usage

```php
$azureDataExplorer = new ReedTech\AzureDataExplorer();
echo $azureDataExplorer->echoPhrase('Hello, ReedTech!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Chris Reed](https://github.com/chrisreedio)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
