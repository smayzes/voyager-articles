<?php

namespace Codelabs\VoyagerArticles\Facades;

use Illuminate\Support\Facades\Facade;

class VoyagerArticles extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'voyagerarticles';
    }
}
