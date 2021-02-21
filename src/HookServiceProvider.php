<?php

namespace Ezitis\Hook;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerCommands();
            $this->configurePublishing();
        }
    }

    /**
     * Register the console commands for the package.
     *
     * hook:install should copy files from ezitis/laravel-docker
     *
     * @return void
     */
    protected function registerCommands()
    {

    }

    protected function configurePublishing()
    {

    }

    public function provides()
    {
        return [
            'hook.install-command',
            'hook.publish-command'
        ];
    }
}