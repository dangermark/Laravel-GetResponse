<?php
namespace Dangermark\GetResponse;

use Illuminate\Support\ServiceProvider;

class GetResponseServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerGetResponseService();

        if ($this->app->runningInConsole()) {
            $this->registerResources();
        }
    }

    /**
     * Register currency provider.
     *
     * @return void
     */
    public function registerGetResponseService()
    {
        $this->app->singleton('getresponse', function ($app) {
            return new GetResponse($app->config->get('getresponse', []));
        });
    }

    /**
     * Register currency resources.
     *
     * @return void
     */
    public function registerResources()
    {
        if ($this->isLumen() === false) {
            $this->publishes([
                __DIR__ . '/../config/getresponse.php' => config_path('getresponse.php'),
            ], 'config');
        }
    }


    /**
     * Check if package is running under Lumen app
     *
     * @return bool
     */
    protected function isLumen()
    {
        return str_contains($this->app->version(), 'Lumen') === true;
    }
}
