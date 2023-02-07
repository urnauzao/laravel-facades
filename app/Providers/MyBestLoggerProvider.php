<?php

namespace App\Providers;

use App\Domains\Helpers\MyBestLogger;
use Illuminate\Support\ServiceProvider;

class MyBestLoggerProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('mybestlogger', fn() => new MyBestLogger());
    }

    public function boot(){}
}
