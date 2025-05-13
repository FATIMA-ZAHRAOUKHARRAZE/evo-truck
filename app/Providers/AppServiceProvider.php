<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
  public function boot()
    {
        if (config('app.debug')) {
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
        }
    }
}
