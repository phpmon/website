<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    #[\Override]
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('github:fetch')->everySixHours();
    }

    #[\Override]
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}
