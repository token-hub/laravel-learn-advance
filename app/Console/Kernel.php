<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('inspire');
        // $schedule->exec('touch foo.text')->everyFiveMinutes()
        // $schedule->exec('touch foo.text')->dailyAt('10:30')
        // $schedule->exec('touch foo.text')->daily()
        // $schedule->command('laravasts:Clear-history')->monthly();
        // $schedule->command('laravasts:Clear-history')->monthly()->thenPing('url');
        // $schedule->command('laravasts:Clear-history')->monthly()->sendOutputTo('path/to/file')->emailOutputTo('');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
