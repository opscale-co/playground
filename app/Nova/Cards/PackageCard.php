<?php

namespace App\Nova\Cards;

use InteractionDesignFoundation\HtmlCard\HtmlCard;

class PackageCard extends HtmlCard
{
    public function __construct($name, $description, $githubUrl, $internalUri)
    {
        $this->view('cards.package-card', [
            'name' => $name,
            'description' => $description,
            'url' => $githubUrl,
            'link' => $internalUri,
        ]);
    }
}
