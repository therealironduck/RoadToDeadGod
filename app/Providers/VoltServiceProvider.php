<?php

declare(strict_types=1);

namespace App\Providers;

use Livewire\Volt\Volt;
use Illuminate\Support\ServiceProvider;

class VoltServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Volt::mount([
            resource_path('views/livewire'),
            resource_path('views/pages'),
        ]);
    }
}
