<?php

namespace TomatoPHP\FilamentSplade;

use Filament\Contracts\Plugin;
use Filament\Panel;
use ProtoneMedia\Splade\Http\SpladeMiddleware;

class FilamentSpladePlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-splade';
    }

    public function register(Panel $panel): void
    {
        if(config('filament-splade.global_allow')){
            $panel->middleware([SpladeMiddleware::class]);
        }
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}
