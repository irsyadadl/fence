<?php

namespace Irsyadadl\Fence\Commands;

use Illuminate\Console\Command;

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
        copy(__DIR__ . '/../../package.json', base_path('package.json'));
    }
}
