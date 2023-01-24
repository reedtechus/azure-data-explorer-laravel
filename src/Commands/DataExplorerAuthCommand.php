<?php

namespace ReedTech\AzureDataExplorer\Commands;

use Illuminate\Console\Command;
use ReedTech\AzureDataExplorer\AzureDataExplorerApi;
use ReedTech\AzureDataExplorer\Facades\AzureDataExplorer;
use ReedTech\AzureDataExplorer\Requests\FetchToken;

class DataExplorerAuthCommand extends Command
{
	protected $signature = 'azure:data-explorer:auth';

	protected $description = 'Validates that an authentication token can be retrieved from Azure Data Explorer';

	public function handle()
	{
		$this->info('Fetching token for Azure Service Bus...');
		$token = AzureDataExplorer::fetchToken();

		// dump($response->json());
		dd($token);

		$this->comment('All done');

		return self::SUCCESS;
	}
}
