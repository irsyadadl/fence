<?php

namespace Irsyadadl\Fence\Console;

use Illuminate\Filesystem\Filesystem;

trait InstallsBladeStack
{
    /**
     * Install the Blade Fence stack.
     *
     * @return void
     */
    protected function installBladeStack()
    {
        // NPM Packages...
        $this->updateNodePackages(function ($packages) {
            return [
                '@tailwindcss/forms' => '^0.5.2',
                'alpinejs' => '^3.4.2',
                'autoprefixer' => '^10.4.2',
                'postcss' => '^8.4.6',
                'tailwindcss' => '^3.1.0',
            ] + $packages;
        });

        // FortifyServiceProvider
        (new Filesystem)->copy(__DIR__.'/../../stubs/default/FortifyServiceProvider.php', app_path('Providers/FortifyServiceProvider.php'));

        // Views...
        (new Filesystem)->ensureDirectoryExists(resource_path('views/auth'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views/layouts'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views/components'));

        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/views/auth', resource_path('views/auth'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/views/layouts', resource_path('views/layouts'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/views/components', resource_path('views/components'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/views/profile', resource_path('views/profile'));

        copy(__DIR__.'/../../stubs/default/resources/views/dashboard.blade.php', resource_path('views/dashboard.blade.php'));

        // Components...
        (new Filesystem)->ensureDirectoryExists(app_path('View/Components'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/App/View/Components', app_path('View/Components'));

        // Tests...
        $this->installTests();

        // Routes...
        copy(__DIR__.'/../../stubs/default/routes/web.php', base_path('routes/web.php'));

        // "Dashboard" Route...
        $this->replaceInFile('/home', '/dashboard', resource_path('views/welcome.blade.php'));
        $this->replaceInFile('Home', 'Dashboard', resource_path('views/welcome.blade.php'));
        $this->replaceInFile('/home', '/dashboard', app_path('Providers/RouteServiceProvider.php'));

        // Tailwind / Vite...
        copy(__DIR__.'/../../stubs/default/tailwind.config.js', base_path('tailwind.config.js'));
        copy(__DIR__.'/../../stubs/default/postcss.config.js', base_path('postcss.config.js'));
        copy(__DIR__.'/../../stubs/default/vite.config.js', base_path('vite.config.js'));
        copy(__DIR__.'/../../stubs/default/resources/css/app.css', resource_path('css/app.css'));
        copy(__DIR__.'/../../stubs/default/resources/js/app.js', resource_path('js/app.js'));

        $this->runCommands(['npm install', 'npm run build']);

        $this->line('');
        $this->components->info('Fence scaffolding installed successfully.');
    }
}
