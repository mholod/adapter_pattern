<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\IpDatabaseLocatorAdapter;
use App\IpLocationLocatorAdapter;
use App\Locator;

class NewsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Locator::class, function($app) {
            switch ($app->make('config')->get('services.ip-locator')) {
                case 'api':
                    return new IpLocationLocatorAdapter();
                case 'database':
                    return new IpDatabaseLocatorAdapter();
                default:
                    throw new \RuntimeException("Unknown IP locator service");
            }
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
