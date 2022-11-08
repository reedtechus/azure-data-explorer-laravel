<?php

namespace ReedTech\AzureDataExplorer;

use ReedTech\AzureDataExplorer\Commands\AuthTestCommand;
use ReedTech\AzureDataExplorer\Commands\QueryTestCommand;
use ReedTech\AzureDataExplorer\Laravel\AzureDataExplorer;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AzureDataExplorerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('azure-data-explorer')
            // ->hasCommands([
            //     QueryTestCommand::class,
            //     AuthTestCommand::class,
            // ])
            ->hasConfigFile();
    }

    public function packageRegistered()
    {
        $this->app->bind(AzureDataExplorer::class, function () {
            return new AzureDataExplorer();
        });
    }
}
