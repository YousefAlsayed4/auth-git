<?php

namespace Acme\AuthPackage;

use Illuminate\Support\ServiceProvider;

class AuthPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'auth-package');

        // Publish assets (optional)
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/auth-package'),
        ], 'views');
    }

    public function register()
    {
        // Register any bindings or services here
    }
}