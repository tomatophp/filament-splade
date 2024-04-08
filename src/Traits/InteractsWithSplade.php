<?php

namespace TomatoPHP\FilamentSplade\Traits;

use Filament\Panel;
use Illuminate\Support\Facades\Route;
use ProtoneMedia\Splade\Http\SpladeMiddleware;

trait InteractsWithSplade
{
    /**
     * @return array|string
     */
    public static function getRouteMiddleware(Panel $panel): array|string
    {
        return [
            SpladeMiddleware::class
        ];
    }
}
