<?php

namespace Irsyadadl\Fence;

use Illuminate\Support\ServiceProvider;
use Irsyadadl\Fence\Commands\InstallCommand;

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
        $this->publishes([
            __DIR__.'/View/Components/Layouts' => app_path('View/Components/Layouts'),
            __DIR__.'/../resources/views/auth' => resource_path('views/auth'),
            __DIR__.'/../resources/views/layouts' => resource_path('views/layouts'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
