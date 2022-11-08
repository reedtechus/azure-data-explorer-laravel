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
        $results = $de->query($query);

        dump('Columns: '.implode(', ', $results->columns));
        dump('Number of Results: '.count($results->data));
        dump('Execution Time: '.$results->executionTime);

        return Command::SUCCESS;
    }
}
