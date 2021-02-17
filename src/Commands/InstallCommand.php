<?php

namespace Irsyadadl\Fence\Commands;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fence:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Install the Fence resources";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->updateNodePackages(function ($packages) {
            return [
                "alpinejs" => "^2.7.3",
                "postcss-import" => "^14.0.0",
                "autoprefixer" => "^10.2.4",
                "postcss" => "^8.2.6",
                "tailwindcss" => "^2.0.3",
                "@tailwindcss/forms" => "^0.2.1"
            ] + $packages;
        });

        // Components...
        (new Filesystem)->ensureDirectoryExists(app_path('View/Components'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/App/View/Components', app_path('View/Components'));

        // Tailwind / Webpack...
        copy(__DIR__.'/../../stubs/tailwind.config.js', base_path('tailwind.config.js'));
        copy(__DIR__.'/../../stubs/webpack.mix.js', base_path('webpack.mix.js'));
        copy(__DIR__.'/../../stubs/resources/css/app.css', resource_path('css/app.css'));
        copy(__DIR__.'/../../stubs/resources/js/app.js', resource_path('js/app.js'));

        // Copy the FortifyServiceProvider file
        copy(__DIR__.'/../../stubs/FortifyServiceProvider.php', app_path('Providers/FortifyServiceProvider.php'));

        $this->info('Fence scaffolding installed successfully.');
        $this->comment('Please execute the "yarn && yarn run dev" command to build your assets.');
    }



    /**
     * Update the "package.json" file.
     *
     * @param  callable  $callback
     * @param  bool  $dev
     * @return void
     */
    protected static function updateNodePackages(callable $callback, $dev = true)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }
}
