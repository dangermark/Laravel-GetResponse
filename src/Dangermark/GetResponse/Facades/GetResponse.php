<?php

namespace Dangermark\GetResponse\Facades;

use Illuminate\Support\Facades\Facade;

class GetResponse extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'getresponse';
    }
}