<?php

namespace Nue\Ui;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\Blade;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->registerConfig();
        $this->registerViews();
        
        $this->configureComponents();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Configure the Nue Blade components.
     *
     * @return void
     */
    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('alert');
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $component)
    {
        Blade::component('ui::components.'.$component, 'nue-'.$component);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/ui.php', 'ui');

        $this->publishes([__DIR__.'/../config' => config_path()], 'ui-config');
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $sourcePath = __DIR__.'/../resources/views';

        $viewPath = resource_path('views/vendor/nue');

        $this->publishes(["{$sourcePath}/publish" => $viewPath], ['views', 'ui-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), 'ui');
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/vendor/nue')) {
                $paths[] = $path . '/vendor/nue';
            }
        }
        return $paths;
    }
}
