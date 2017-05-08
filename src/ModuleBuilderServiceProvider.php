<?php
namespace Deviffy\ModuleBuilder;

use Illuminate\Support\ServiceProvider;

class ModuleBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Routing
        include __DIR__ . DIRECTORY_SEPARATOR . 'routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Deviffy\ModuleBuilder\Controllers\ModuleBuilderController');
    }
}
