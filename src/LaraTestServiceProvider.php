<?php

namespace Christopheredjohnson\LaraTest;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Christopheredjohnson\LaraTest\Commands\LaraTestCommand;

class LaraTestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lara-test')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lara-test_table')
            ->hasCommand(LaraTestCommand::class);
    }
}
