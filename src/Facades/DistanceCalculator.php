<?php

namespace Hitocean\DistanceCalculator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hitocean\DistanceCalculator\DistanceCalculator
 */
class DistanceCalculator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'distance-calculator';
    }
}
