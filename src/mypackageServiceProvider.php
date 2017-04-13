<?php

namespace slavensaka\mypackage;

use Illuminate\Support\ServiceProvider;

class mypackageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    	$this->loadMigrationsFrom(__DIR__ . '/Migrations');
    	$this->loadRoutesFrom(__DIR__ . '/Routes/routes.php');
        $this->publishes([__DIR__ . '/Config/mypackage.php' => config_path('mypackage.php')], 'config');
        $this->publishes([__DIR__ . '/Assets' => public_path('vendor/mypackage'),], 'public');
        $this->loadTranslationsFrom(__DIR__ . '/Lang', 'mypackage');

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
    	$this->mergeConfigFrom( __DIR__. '/Config/mypackage.php', 'mypackage');
    	$this->loadViewsFrom(__DIR__ . '/Views', 'mypackage');
		$this->app->instance('mypackage', new mypackage);
    }
}