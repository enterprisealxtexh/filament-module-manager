<?php

namespace EnterpriseAlxtexh\FilamentModuleManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentModuleManagerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-module-manager';

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-module-manager')
            ->hasTranslations()
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageBooted(): void
    {
        \Illuminate\Support\Facades\Gate::policy(
            \EnterpriseAlxtexh\FilamentModuleManager\Models\Module::class,
            \EnterpriseAlxtexh\FilamentModuleManager\Policies\ModulePolicy::class
        );
    }
}
