<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {   
        // bind app for Depedency injection
        // https://laravel.com/docs/5.5/container
        // @author thomas
        $this->app->bind('App\Repositories\NigoriceInterface', 'App\Repositories\NigoriceRepo');

    }
}
