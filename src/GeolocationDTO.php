<?php

namespace Hitocean\DistanceCalculator;

use Spatie\DataTransferObject\DataTransferObject;

class GeolocationDTO extends DataTransferObject
{
    public float $latitude;
    public float $longitude;
}
