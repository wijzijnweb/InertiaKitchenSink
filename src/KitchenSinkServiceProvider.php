<?php

namespace Exapps\KitchenSink;

use Illuminate\Support\ServiceProvider;

use Exapps\KitchenSink\KitchenSink;

class KitchenSinkServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
         $this->loadRoutesFrom(__DIR__.'/routes.php');

         $this->loadViewsFrom(__DIR__.'/resources/views', 'kitchen-sink');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // Register the service the package provides.
        $this->app->singleton('kitchen-sink', function ($app) {
            return new KitchenSink;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['kitchen-sink'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the views.
        $this->publishes([
            __DIR__.'/resources/js/Components' => base_path('resources/js/Components'),
            __DIR__.'/resources/js/Pages' => base_path('resources/js/Pages'),
        ], 'kitchen-sink.views');

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/exapps'),
        ], 'kitchen-sink.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/exapps'),
        ], 'kitchen-sink.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
