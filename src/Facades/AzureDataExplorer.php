<?php

namespace ReedTech\AzureDataExplorer\Facades;

use Illuminate\Support\Facades\Facade;
use ReedTech\AzureDataExplorer\Laravel\AzureDataExplorer as AzureDataExplorerLaravel;

/**
 * @see \ReedTech\AzureDataExplorer\AzureDataExplorer
 */
class AzureDataExplorer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AzureDataExplorerLaravel::class;
    }
}
