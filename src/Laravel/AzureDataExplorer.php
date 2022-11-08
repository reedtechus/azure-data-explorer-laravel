<?php

namespace ReedTech\AzureDataExplorer\Laravel;

use ReedTech\AzureDataExplorer\AzureDataExplorerApi;
use ReedTech\AzureDataExplorer\Data\QueryResultsDTO;

class AzureDataExplorer extends AzureDataExplorerApi
{
    final public function __construct()
    {
        parent::__construct(
            config('azure-data-explorer.tenant_id'),
            config('azure-data-explorer.client_id'),
            config('azure-data-explorer.client_secret'),
            config('azure-data-explorer.region'),
            config('azure-data-explorer.cluster'),
        );

        $this->database = config('azure-data-explorer.database');
    }

    public static function queryOnce(string|array $query): QueryResultsDTO
    {
        return (new self())->query($query);
    }
}
