<?php

namespace Hitocean\DistanceCalculator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hitocean\DistanceCalculator\Commands\DistanceCalculatorCommand;

class DistanceCalculatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('distance-calculator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_distance-calculator_table')
            ->hasCommand(DistanceCalculatorCommand::class);

        $this->app->bind('distance-calculator',function(){
            return new DistanceCalculator();
        });
    }
}
