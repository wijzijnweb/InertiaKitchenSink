<?php

namespace Exapps\KitchenSink\Facades;

use Illuminate\Support\Facades\Facade;

class KitchenSink extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'kitchen-sink';
    }
}
