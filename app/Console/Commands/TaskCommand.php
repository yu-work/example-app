<?php

namespace App\Console\Commands;

use App\Services\TaskManager;
use Illuminate\Console\Command;

class TaskCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:add {name : The name of the task}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new task';

    /**
     * @var TaskManager
     */
    private TaskManager $taskManager;

    /**
     * Create a new command instance.
     */
    public function __construct(TaskManager $taskManager)
    {
        parent::__construct();
        $this->taskManager = $taskManager;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $taskName = $this->argument('name');
        $this->taskManager->addTask($taskName);
        $this->info("Task '{$taskName}' has been added.");
        
        $this->info("\nCurrent tasks:");
        foreach ($this->taskManager->getTasks() as $index => $task) {
            $this->line("  " . ($index + 1) . ". {$task}");
        }
    }
}
