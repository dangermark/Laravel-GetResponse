<?php

namespace Dangermark\GetResponse;

use Illuminate\Support\ServiceProvider;

class GetResponseServiceProvider extends ServiceProvider
{
    protected $defer = true;
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/getresponse.php' => config_path('getresponse.php'),
        ], 'config');
    }
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/getresponse.php', 'getresponse');
        $this->app['getresponse'] = $this->app->singleton('getresponse', function ($app) {
            return new GetResponse($app);
        });
    }
    public function provides()
    {
        return ['getresponse'];
    }
}
