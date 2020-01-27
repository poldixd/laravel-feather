<?php

namespace poldixd\LaravelFeather\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelFeatherServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'feather');
    }
}