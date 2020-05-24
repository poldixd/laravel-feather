<?php

namespace poldixd\LaravelFeather\Providers;

use poldixd\LaravelFeather\FeatherIcons;
use Illuminate\Support\Facades\Blade;
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

        collect(FeatherIcons::ICONS)->each(function (string $icon) {
            Blade::component("feather::components.$icon", "feather-$icon");
        });
    }
}