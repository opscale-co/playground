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

            MenuSection::make('Security', [
                MenuItem::resource(\Opscale\NovaAuthorization\Nova\Role::class),
            ])->icon('lock-closed')->collapsable(),

            MenuSection::make('Integration', [
                MenuItem::resource(\Opscale\NovaWebhooks\Nova\Webhook::class),
                MenuItem::resource(\Opscale\NovaAPI\Nova\AccessToken::class),
            ])->icon('link')->collapsable(),

            MenuSection::make('DOM', [
                MenuItem::resource(\Opscale\NovaWidgets\Nova\Widget::class),
            ])->icon('puzzle')->collapsable(),
        ];
    }
}
