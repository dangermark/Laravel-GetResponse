<?php
namespace Dangermark\GetResponse;
use Illuminate\Support\ServiceProvider;
class GetReponseServiceProvider extends ServiceProvider
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
        $this->app['getresponse'] = $this->app->share(function ($app) {
            return new CampaignMonitor($app);
        });
    }
    public function provides()
    {
        return ['getresponse'];
    }
}