<?php

namespace ProjectorBUg\IBanking;

use ProjectorBUg\IBanking\Contracts\Parser;
use Illuminate\Support\ServiceProvider;

class IBankingServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ProjectorBUg\IBanking\Contracts\Parser', function ($app) {
            return new CrawlerParser();
        });

        $this->app->singleton('ProjectorBUg\IBanking\Contracts\Factory', function ($app) {
            return new IBankingManager($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ProjectorBUg\IBanking\Contracts\Factory'];
    }
}
