<?php

namespace Codelabs\VoyagerArticles;

use Illuminate\Support\ServiceProvider;

class VoyagerArticlesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'voyagerarticles');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'codelabs');
         $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/voyagerarticles.php' => config_path('voyagerarticles.php'),
            ], 'voyagerarticles.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/codelabs'),
            ], 'voyagerarticles.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/codelabs'),
            ], 'voyagerarticles.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/codelabs'),
            ], 'voyagerarticles.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
//        $this->mergeConfigFrom(__DIR__.'/../config/voyagerarticles.php', 'voyagerarticles');

        // Register the service the package provides.
        $this->app->singleton('voyagerarticles', function ($app) {
            return new VoyagerArticles;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['voyagerarticles'];
    }
}
