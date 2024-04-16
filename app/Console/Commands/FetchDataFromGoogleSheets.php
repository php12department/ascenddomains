<?php

namespace App\Console\Commands;

use App\Models\Domain;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Console\Command;

class FetchDataFromGoogleSheets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-data-from-google-sheets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $credentialsPath = base_path() . '/credentials.json';

        // The ID of the Google Sheets document
        $spreadsheetId = '1xhbWpkbUAx99jQMyzPto5BvLEYA7KI8Qejc4OdZgtAA';

        $client = new \Google_Client();
        $client->setAuthConfig($credentialsPath);
        $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');

        // Disable SSL verification
        $client->setHttpClient(new Client(['verify' => false]));

        // Initialize the Sheets API
        $sheets = new \Google_Service_Sheets($client);

        // Define the range to retrieve data from all columns in the new sheet
        $range = 'DNData!A2:U'; // Assuming data starts from row 2 and includes all columns A to U

        $response = $sheets->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();

        if (empty($values)) {
            die('No data found.');
        }

        // Prepare data for bulk insertion
        // Insert data into the database in smaller batches
        $chunkSize = 100; // Adjust the chunk size as needed

        foreach (array_chunk($values, $chunkSize) as $chunk) {
            foreach ($chunk as $row) {
                // Check if the row is empty
                if (empty($row[0])) {
                    continue; // Skip the current iteration if the row is empty
                }

                $regDate = !empty($row[7]) ? $row[7] : null;
                $expDate = !empty($row[6]) ? $row[6] : null;
                $this->info('Processing domain: ' . $regDate);
                // Create an array with the data for the current row
                $domainData = [
                    'name' => $row[0],
                    'name_uppercase' => $row[1],
                    'tags' => $row[2],
                    'length' => $row[3],
                    'extension' => $row[4],
                    'registrar' => $row[5],
                    'exp_date' => $expDate,
                    'reg_date' => $regDate,
                    'pattern' => $row[8],
                    'bin' => $row[18],
                    'min_offer' => $row[19],
                    'floor_usd' => $row[20],
                ];

                Log::info('Processing domain: ' . $domainData['name']);
                $this->info('Processing domain: ' . $domainData['name']);

                // Use updateOrCreate to insert new records or update existing ones
                Domain::updateOrCreate(['name' => $row[0]], $domainData);
            }
        }
        // Log when the process finishes
        Log::info('Domain data import process finished.');
        $this->info('Domain data import process finished.');
    }
}
