<?php

namespace ReedTech\AzureDataExplorer\Laravel;

use ReedTech\AzureDataExplorer\AzureDataExplorerApi;

class AzureDataExplorer extends AzureDataExplorerApi
{
    public static function make(): static
    {
        return new static();
    }

    public function __construct()
    {
        parent::__construct(
            config('azure-data-explorer.tenant_id'),
            config('azure-data-explorer.client_id'),
            config('azure-data-explorer.client_secret'),
            config('azure-data-explorer.region'),
            config('azure-data-explorer.cluster'),
        );
        // $api = new AzureDataExplorerApi(

        // );
    }
}
