<?php

declare(strict_types=1);

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Telescope\Console\PruneCommand;
use Laravel\Horizon\Console\SnapshotCommand;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        // First party packages
        $schedule->command(SnapshotCommand::class)->everyFiveMinutes();
        $schedule->command(PruneCommand::class)->daily();
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
    }
}
