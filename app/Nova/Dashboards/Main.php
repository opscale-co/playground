<?php

namespace App\Nova\Dashboards;

use App\Nova\Cards\PackageCard;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new PackageCard(
                'nova-catalogs',
                'A simple repository for managing reusable data for a Nova app',
                'https://github.com/opscale-co/nova-catalogs',
                '/resources/catalogs'
            ),
        ];
    }
}
