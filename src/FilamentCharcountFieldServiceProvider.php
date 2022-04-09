<?php

namespace MartinRo\FilamentCharcountField;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentCharcountFieldServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-charcount-field')
            ->hasViews();
    }
}
