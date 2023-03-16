<?php

namespace App\Providers;

use App\Access\Hello;
use Illuminate\Support\ServiceProvider;

class HelloProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('hola',function(){
            return new Hello();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
