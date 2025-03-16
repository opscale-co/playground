<?php

namespace App\Nova\Dashboards;

use App\Nova\Cards\PackageCard;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    public function label()
    {
        return 'Packages';
    }

    public function cards(): array
    {
        return [
            new PackageCard(
                'Nova Widgets',
                '/resources/widgets',
                'https://github.com/opscale-co/nova-widgets',
                'fa-code'),
            new PackageCard(
                'Nova Webhooks',
                '/resources/webhooks',
                'https://github.com/opscale-co/nova-webhooks',
                'fa-webhook'),
        ];
    }
}
