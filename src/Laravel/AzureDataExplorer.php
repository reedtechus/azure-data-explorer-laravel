<?php

namespace ReedTech\AzureDataExplorer\Laravel;

use ReedTech\AzureDataExplorer\AzureDataExplorerApi;
use ReedTech\AzureDataExplorer\Data\QueryResultsDTO;
use ReedTech\AzureDataExplorer\Interfaces\IngestModelInterface;
use Saloon\Http\Response;

class AzureDataExplorer extends AzureDataExplorerApi
{
    final public function __construct()
    {
        parent::__construct(
            (string) config('azure-data-explorer.tenant_id'),
            (string) config('azure-data-explorer.client_id'),
            (string) config('azure-data-explorer.client_secret'),
            (string) config('azure-data-explorer.region'),
            (string) config('azure-data-explorer.cluster'),
        );

        $this->database = config('azure-data-explorer.database');
    }

    public static function queryV1Once(string|array $query): QueryResultsDTO
    {
        return (new self())->queryV1($query);
    }

    public static function queryOnce(string|array $query): QueryResultsDTO
    {
        if ((is_array($query) && str_starts_with($query[0], '.')) || (is_string($query) && str_starts_with($query, '.'))) {
            return (new self())->queryV1($query);
        } else {
            return (new self())->query($query);
        }
    }

    public static function ingestOnce(IngestModelInterface $model): Response
    {
        return (new self())->ingest($model);
    }
}
