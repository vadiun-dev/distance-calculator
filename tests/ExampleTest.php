<?php

it('distancia entre dos coordenadas', function ()
{
    $distance = \Hitocean\DistanceCalculator\DistanceCalculator::distanceBetweenTwoCoordinates(
        new \Hitocean\DistanceCalculator\GeolocationDTO(
            latitude:  -34.6089248968147,
            longitude: -58.47126578660082
        ),
        new \Hitocean\DistanceCalculator\GeolocationDTO(
            latitude:  -34.61450628718838,
            longitude: -58.46698241514944
        )
    );
    expect(0.73)->toEqual($distance);
});

it('distancia entre muchas coordenadas', function ()
{
    $distance = \Hitocean\DistanceCalculator\DistanceCalculator::distanceBetweenManyCoordinates([
        new \Hitocean\DistanceCalculator\GeolocationDTO(
            latitude:  -34.6089248968147,
            longitude: -58.47126578660082
        ),
        new \Hitocean\DistanceCalculator\GeolocationDTO(
            latitude:  -34.61450628718838,
            longitude: -58.46698241514944
        ),
        new \Hitocean\DistanceCalculator\GeolocationDTO(
            latitude: -34.63077460519454,
            longitude: -58.46963507957354
        ),
    ]);
    expect(2.56)->toEqual($distance);
});
