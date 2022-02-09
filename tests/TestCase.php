<?php

namespace poldixd\LaravelFeather\Tests;

use poldixd\LaravelFeather\Providers\LaravelFeatherServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('view.paths', [
            __DIR__.'/views',
            resource_path('views'),
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelFeatherServiceProvider::class,
        ];
    }
}