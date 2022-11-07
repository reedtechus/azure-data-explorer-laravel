<?php

namespace ReedTech\AzureDataExplorer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ReedTech\AzureDataExplorer\AzureDataExplorer
 */
class AzureDataExplorer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ReedTech\AzureDataExplorer\AzureDataExplorer::class;
    }
}
