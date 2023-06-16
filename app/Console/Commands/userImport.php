<?php

namespace App\Console\Commands;

use App\Http\Controllers\ImportController;
use Illuminate\Console\Command;

//* * * * * php /path/to/artisan schedule:run 1>> /dev/null 2>&1

class userImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $importController = new ImportController();
        $importController->import();
    }
}
