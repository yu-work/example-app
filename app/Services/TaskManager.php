<?php

namespace App\Services;

class TaskManager
{
    /**
     * Task storage instance
     */
    private $storage;

    public function __construct()
    {
        // Anonymous class for task storage
        $this->storage = new class {
            private static array $tasks = [];

            public function add(string $task): void
            {
                self::$tasks[] = $task;
            }

            public function getAll(): array
            {
                return self::$tasks;
            }
        };
    }

    /**
     * Add a new task
     *
     * @param string $taskName
     * @return void
     */
    public function addTask(string $taskName): void
    {
        $this->storage->add($taskName);
    }

    /**
     * Get all tasks
     *
     * @return array
     */
    public function getTasks(): array
    {
        return $this->storage->getAll();
    }
}
