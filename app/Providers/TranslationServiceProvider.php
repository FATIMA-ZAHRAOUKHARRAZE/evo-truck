<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use App\Services\TranslationService;

class TranslationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('translation', function ($app) {
            return new TranslationService();
        });
    }

    public function boot()
    {
        // Ajouter des logs pour le débogage
        if (config('app.debug')) {
            \Log::info('TranslationServiceProvider booted');
        }
    }
}