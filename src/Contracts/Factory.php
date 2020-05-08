<?php

namespace ProjectorBUg\IBanking\Contracts;

interface Factory
{
    /**
     * Get an bank provider implementation.
     *
     * @param  string  $driver
     * @return \ProjectorBUg\IBanking\Contracts\Provider
     */
    public function driver($driver = null);
}
