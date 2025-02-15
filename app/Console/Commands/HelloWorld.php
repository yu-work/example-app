<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloWorld extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello:world';

    /**
     * The command description.
     *
     * @var string
     */
    protected $description = 'Display Hello World message';



    /**
     * Execute the console command.
     */
    public function handle()
    {
        $page = new class {
            public $title = 'main page';
        };
        $this->info($page->title);
        $this->info('Hello World!');
    }
}
