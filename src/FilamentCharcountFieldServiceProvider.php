<?php

namespace MartinRo\FilamentCharcountField;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentCharcountFieldServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-charcounted-field' => __DIR__ . '/../dist/css/filament-charcounted-field.css',
    ];

    protected array $scripts = [
        'filament-charcounted-field' => __DIR__ . '/../dist/js/filament-charcounted-field.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-charcount-field')
            ->hasAssets()
            ->hasViews();
    }
}
