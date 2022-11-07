<?php

namespace ReedTech\AzureDataExplorer\Commands;

use Illuminate\Console\Command;

class AzureDataExplorerCommand extends Command
{
    public $signature = 'azure:de:query:test';

    public $description = 'Perform a test query against Azure Data Explorer';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
