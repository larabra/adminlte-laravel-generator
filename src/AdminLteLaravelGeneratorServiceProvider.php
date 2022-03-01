<?php

namespace Larabra\AdminLteLaravelGenerator;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AdminLteLaravelGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'adminlte-laravel-generator');
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/adminlte-laravel-generator')
        ]);

        Paginator::defaultView('adminlte-laravel-generator::common.paginator');
        Paginator::defaultSimpleView('adminlte-laravel-generator::common.simple_paginator');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
