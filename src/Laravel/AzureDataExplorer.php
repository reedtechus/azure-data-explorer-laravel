<?php

namespace ReedTech\AzureDataExplorer\Laravel;

use ReedTech\AzureDataExplorer\AzureDataExplorerApi;
use ReedTech\AzureDataExplorer\Data\QueryResultsDTO;
use ReedTech\AzureDataExplorer\Interfaces\IngestModelInterface;
use Sammyjo20\Saloon\Http\SaloonResponse;

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

    public static function ingestOnce(IngestModelInterface $model): SaloonResponse
    {
        return (new self())->ingest($model);
    }
}
