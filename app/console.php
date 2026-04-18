<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schedule;

Schedule::command('github:fetch-statistics')->everySixHours();
Schedule::command('github:fetch-latest-release')->dailyAt('09:00');
