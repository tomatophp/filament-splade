<?php

namespace TomatoPHP\FilamentSplade;

use Illuminate\Support\ServiceProvider;


class FilamentSpladeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\FilamentSplade\Console\FilamentSpladeInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-splade.php', 'filament-splade');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-splade.php' => config_path('filament-splade.php'),
        ], 'filament-splade-config');

    }

    public function boot(): void
    {

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
