<?php

namespace HusamTariq\autoTranslator;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/autoTranslator.php' => config_path('autoTranslator.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                Command::class
            ]);
        }
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
