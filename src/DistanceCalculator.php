<?php

namespace Hitocean\DistanceCalculator;



class DistanceCalculator
{
    public static function distanceBetweenManyCoordinates(array $geolocations): float
    {
        if (count($geolocations) === 0) {
            return 0;
        }
        $first = $geolocations[0];
        $distance = 0;
        unset($geolocations[0]);
        foreach ($geolocations as $geolocation) {
            $distance += static::distanceBetweenTwoCoordinates($first, $geolocation);
            $first = $geolocation;
        }

        return round($distance, 2);
    }

    public static function distanceBetweenTwoCoordinates(
        GeolocationDTO $geolocation1,
        GeolocationDTO $geolocation2
    ): float {
        $earthRadius = 6371;
        $latFrom = deg2rad($geolocation1->latitude);
        $lonFrom = deg2rad($geolocation1->longitude);
        $latTo = deg2rad($geolocation2->latitude);
        $lonTo = deg2rad($geolocation2->longitude);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(
            sqrt(
                    (sin($latDelta / 2) ** 2) +
                    cos($latFrom) * cos($latTo) * (sin($lonDelta / 2) ** 2)
                )
        );

        return round($angle * $earthRadius, 2);
    }
}
