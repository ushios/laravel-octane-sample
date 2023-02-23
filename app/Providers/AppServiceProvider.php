<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Octane\Facades\Octane;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Octane::tick('send-stats', function() {
            $stats = app('Swoole\Http\Server')->stats();
            printf("workers_total: %d, workers_idle: %d, task_workers_total: %d, task_workers_idle: %d",
                $stats['workers_total'],
                $stats['workers_idle'],
                $stats['task_workers_total'],
                $stats['task_workers_idle']
            );
        })
        ->seconds(1)
        ->immediate();

        Octane::tick('using-task-worker', function() {
            sleep(5);
        })
        ->seconds(10)
        ->immediate();
    }
}
