<?php

namespace App\Nova\Cards;

use InteractionDesignFoundation\HtmlCard\HtmlCard;

class PackageCard extends HtmlCard
{
    public function __construct(
        string $name,
        string $path,
        string $url,
        string $icon)
    {
        parent::__construct();
        $this->width('1/3')->view('package-card', [
            'name' => $name,
            'path' => $path,
            'url' => $url,
            'icon' => $icon,
        ]);
    }
}
