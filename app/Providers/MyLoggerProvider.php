<?php

namespace App\Providers;

use App\Domains\Helpers\MyLogger;
use Illuminate\Support\ServiceProvider;

class MyLoggerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('MyLogger', fn() => new MyLogger);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
