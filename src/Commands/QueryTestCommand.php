<?php

namespace ReedTech\AzureDataExplorer\Commands;

use Illuminate\Console\Command;
use ReedTech\AzureDataExplorer\Laravel\AzureDataExplorer;

class QueryTestCommand extends Command
{
    public $signature = 'azure:de:query:test {query*}';

    public $description = 'Perform a test query against Azure Data Explorer';

    public function handle(): int
    {
        $query = $this->argument('query');
        $de = new AzureDataExplorer();
        $response = $de->query($query);

        // $request = AzureDataExplorerConnector::query($query);
        // $response = $request->send();
        if ($response->failed()) {
            $this->error('Failed to query Azure Data Explorer');
            $this->error('Response: '.print_r($response->json(), true));

            return Command::FAILURE;
        }

        // Handle Successful Response
        /** @var QueryResultsDTO $results */
        $results = $response->dto();

        dump('Columns: '.implode(', ', $results->columns));
        dump('Number of Results: '.count($results->data));
        dump('Execution Time: '.$results->executionTime);

        return Command::SUCCESS;
    }
}
