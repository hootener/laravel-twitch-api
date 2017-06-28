<?php

namespace Hootener\TwitchApi\Facades;

use Illuminate\Support\Facades\Facade;

class TwitchApiServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Hootener\TwitchApi\Services\TwitchApiService';
    }
}
