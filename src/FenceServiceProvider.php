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
            __DIR__ . '/View/Components/Layouts' => app_path('View/Components/Layouts'),
            __DIR__ . '/FortifyServiceProvider.php' => app_path('Providers/FortifyServiceProvider.php'),
            __DIR__ . '/../resources/views/components' => resource_path('views/components'),
            __DIR__ . '/../resources/views/auth' => resource_path('views/auth'),
            __DIR__ . '/../resources/views/layouts' => resource_path('views/layouts'),
            __DIR__ . '/../resources/js' => resource_path('js'),
            __DIR__ . '/../resources/css' => resource_path('css'),
        ]);

        if (! $this->app->runningInConsole()) {
            return;
        }

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
