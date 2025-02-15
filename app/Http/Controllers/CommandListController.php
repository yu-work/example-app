<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CommandListController extends Controller
{
    public function index()
    {
        $commands = [];
        foreach (Artisan::all() as $name => $command) {
            // Only include commands from our App namespace
            if (str_starts_with(get_class($command), 'App\\Console\\Commands\\')) {
                $commands[] = [
                    'name' => $name,
                    'description' => $command->getDescription()
                ];
            }
        }
        
        return view('commands.index', ['commands' => $commands]);
    }
}
