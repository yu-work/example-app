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
            if (property_exists($command, 'tags') && in_array('user-created', $command->tags)) {
                $commands[] = [
                    'name' => $name,
                    'description' => $command->getDescription()
                ];
            }
        }
        
        return view('commands.index', ['commands' => $commands]);
    }
}
