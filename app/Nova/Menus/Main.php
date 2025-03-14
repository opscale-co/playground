<?php

namespace App\Nova\Menus;

use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;

class Main
{
    public static function build(): array
    {
        return [
            MenuSection::make('Resources', [
                MenuItem::resource(\App\Nova\User::class),
            ])->icon('database')->collapsable(),
        ];
    }
}
