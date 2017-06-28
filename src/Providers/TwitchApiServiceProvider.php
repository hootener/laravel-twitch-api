<?php

namespace Hootener\TwitchApi\Providers;

use Illuminate\Support\ServiceProvider;

class TwitchApiServiceProvider extends ServiceProvider
{
    // Register service provider
    public function register()
    {
        $this->registerServices();
    }

    // Boot
    public function boot()
    {
        $this->addConfig();
    }

    // Register services
    private function registerServices()
    {
        $this->app->bind('Hootener\TwitchApi\Services\TwitchApiService', 'Hootener\TwitchApi\Services\TwitchApiService');
    }

    // Add config file
    private function addConfig()
    {
        $this->publishes([
            __DIR__.'/../../config/twitch-api.php' => config_path('twitch-api.php'),
        ]);
    }
}
