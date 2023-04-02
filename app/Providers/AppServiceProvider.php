<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MailerLite\MailerLite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('MailerliteSDK', function ($app, $params) {
            return new MailerLite(['api_key' => $params['api_key'] ?? null, 'debug' => true]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
