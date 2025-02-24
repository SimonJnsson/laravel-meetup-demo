<?php

namespace Meetup\Encoder;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Meetup\Encoder\Commands\EncoderCommand;

class EncoderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-meetup-demo')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_meetup_demo_table')
            ->hasCommand(EncoderCommand::class);
    }
}
