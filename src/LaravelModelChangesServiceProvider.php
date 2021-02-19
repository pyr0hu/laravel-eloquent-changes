<?php

namespace Pyr0hu\LaravelModelChanges;

use Pyr0hu\LaravelModelChanges\Commands\LaravelModelChangesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelModelChangesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-model-changes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_model_changes_table')
            ->hasCommand(LaravelModelChangesCommand::class);
    }
}
