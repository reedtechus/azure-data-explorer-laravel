<?php

namespace ReedTech\AzureDataExplorer\Commands;

use Illuminate\Console\Command;
use ReedTech\AzureDataExplorer\Laravel\AzureDataExplorer;

class AuthTestCommand extends Command
{
    public $signature = 'azure:de:auth:test';

    public $description = 'Validates connectivity with Azure Data Explorer';

    public function handle(): int
    {
        // Perform the Auth Request
        $de = new AzureDataExplorer();
        $response = $de->fetchToken();

        if ($response->failed()) {
            $this->error('Failed to authenticate with Azure App Authentication! Status: '.$response->status());
            $this->error('Error: '.$response->toGuzzleResponse()->getReasonPhrase());

            // $this->error('Response: '.print_r($response, true));

            return Command::FAILURE;
        }

        $this->info('Cached Response? '.($response->isCached() ? 'Yes' : 'No'));
        $this->comment('Access Token: '.$response->json('access_token'));

        return self::SUCCESS;
    }
}
