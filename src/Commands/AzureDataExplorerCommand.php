<?php

namespace ReedTech\AzureDataExplorer\Commands;

use Illuminate\Console\Command;

class AzureDataExplorerCommand extends Command
{
    public $signature = 'azure:de:test';

    public $description = 'Command to test the functionality of the package';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
