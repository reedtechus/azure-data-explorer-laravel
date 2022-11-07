<?php

namespace ReedTech\AzureDataExplorer\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use ReedTech\AzureDataExplorer\AzureDataExplorerServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'ReedTech\\AzureDataExplorer\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            AzureDataExplorerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        config()->set('azure-data-explorer.tenant_id', 'tenant_id');
        config()->set('azure-data-explorer.client_id', 'client_id');
        config()->set('azure-data-explorer.client_secret', 'client_secret');
        config()->set('azure-data-explorer.region', 'region');
        config()->set('azure-data-explorer.cluster', 'cluster');

        /*
        $migration = include __DIR__.'/../database/migrations/create_azure-data-explorer-laravel_table.php.stub';
        $migration->up();
        */
    }
}
