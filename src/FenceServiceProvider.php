<?php

namespace Irsyadadl\Fence;

use Illuminate\Support\ServiceProvider;
use Irsyadadl\Fence\Commands\InstallCommand;
use Laravel\Fortify\FortifyServiceProvider;

class FenceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }
        $this->mergeConfigFrom(
            __DIR__.'/../config/fence.php', 'app'
        );

        $this->publishes([
            FortifyServiceProvider::class,
        ]);

        $this->commands([
            InstallCommand::class,
        ]);
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [InstallCommand::class];
    }
}
