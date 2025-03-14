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
                'Opscale',
                '/dashboards/main',
                'https://github.com/opscale-co',
                'fa-house'),
        ];
    }
}
