<?php

namespace Codecheef\Backup;

use Codecheef\Backup\Commands\BackupCommand;
use Illuminate\Support\ServiceProvider;

class BackupServiceProvider extends ServiceProvider
{
    public function register()
    {
        # code...
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BackupCommand::class
            ]);
        }
    }
}