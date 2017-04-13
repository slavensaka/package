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
        $this->publishes([__DIR__ . '/Config/mypackage.php' => config_path('mypackage.php')], 'config');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
    	$this->mergeConfigFrom( __DIR__. '/Config/mypackage.php', 'mypackage');
		$this->app->instance('mypackage', new mypackage);
    }
}