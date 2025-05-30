<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use URL;

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
        // used for testing purposes when using a local server NGROK
        if(config("app.env") === "local"){
            URL::forceScheme("https");
        }
    }
}
