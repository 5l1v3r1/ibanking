<?php

namespace ProjectorBUg\IBanking\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ProjectorBUg\IBanking\IBankingManager
 */
class IBanking extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ProjectorBUg\IBanking\Contracts\Factory';
    }
}
