<?php
namespace Deviffy\ModuleBuilder\Commands;

class ModuleBuilderInstall extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'modulebuilder:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run installation of ModuleBuilder.';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {

    }
}
