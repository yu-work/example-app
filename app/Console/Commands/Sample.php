<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Sample extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sample';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'sample';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $tempClass = new class {};
        $this->info('Hello World!2');
    }
}
