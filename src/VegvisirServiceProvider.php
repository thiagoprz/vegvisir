<?php

namespace Thiagoprz\Vegvisir;

use Illuminate\Support\ServiceProvider;

class VegvisirServiceProvider extends ServiceProvider
{
    /**
     * Registers package configuration
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/vegvisir.php', 'vegvisir'
        );
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/config/vegvisir.php' => config_path('vegvisir.php'),
        ], 'config');
    }

}
