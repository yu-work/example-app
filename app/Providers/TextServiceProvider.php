<?php

namespace App\Providers;

use App\Services\TextService;
use Illuminate\Support\ServiceProvider;

class TextServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(TextService::class, function ($app) {
            return new TextService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
