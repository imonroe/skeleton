<?php

namespace imonroe\skeleton;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
      // Migrations:
      $this->loadMigrationsFrom(__DIR__.'/migrations');

      // Views:
      //$this->loadViewsFrom(__DIR__.'/../reources/views', 'skeleton');
      //$this->publishes([
      //	__DIR__.'/../reources/views' => resource_path('views/imonroe/skeleton'),
      //]);

      // Routes:
      $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}