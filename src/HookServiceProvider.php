<?php

namespace Ezitis\Hook;

use Ezitis\Hook\Console\ListServicesCommand;
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
    public function boot(): void
    {
        $this->registerCommands();
    }

    /**
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ListServicesCommand::class
            ]);
        }
    }


    /**
     * Get the services provided
     *
     * @return array
     */
    public function provides(): array
    {
        return [
            ListServicesCommand::class
        ];
    }
}