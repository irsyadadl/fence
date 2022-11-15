<?php

namespace Irsyadadl\Fence;

use Illuminate\Support\ServiceProvider;
use Irsyadadl\Fence\Console\InstallCommand;

class FenceServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            InstallCommand::class,
        ]);
    }

    public function provides(): array
    {
        return [InstallCommand::class];
    }
}
