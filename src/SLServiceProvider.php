<?php

namespace Trim07\ServiceLayerSap;

use Illuminate\Support\ServiceProvider;

class SLServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/service-layer.php' => config_path('service-layer.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if (file_exists(config_path('service-layer.php'))) {
            $this->mergeConfigFrom(config_path('service-layer.php'), 'service-layer');
        } else {
            $this->mergeConfigFrom(__DIR__ . '/../config/service-layer.php', 'service-layer');
        }
    }
}