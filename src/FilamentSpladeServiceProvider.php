<?php

namespace Tomatophp\FilamentSplade;

use Illuminate\Support\ServiceProvider;


class FilamentSpladeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \Tomatophp\FilamentSplade\Console\FilamentSpladeInstall::class,
        ]);
 
        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-splade.php', 'filament-splade');
 
        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-splade.php' => config_path('filament-splade.php'),
        ], 'filament-splade-config');
 
        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
 
        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'filament-splade-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-splade');
 
        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/filament-splade'),
        ], 'filament-splade-views');
 
        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-splade');
 
        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-splade'),
        ], 'filament-splade-lang');
 
        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
 
    }

    public function boot(): void
    {
        //you boot methods here
    }
}
