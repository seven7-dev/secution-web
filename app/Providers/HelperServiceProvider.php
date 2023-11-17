<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Helpers\Helper;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Helper', function () {
            return new Helper();
        });
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