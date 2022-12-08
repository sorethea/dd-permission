<?php

namespace Sorethea\DdPermission;

use Filament\PluginServiceProvider;
use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;

class PermissionServiceProvider extends PluginServiceProvider
{
    protected array $resources =[
        PermissionResource::class,
    ];
    public function configurePackage(Package $package): void
    {
        $package->name("dd-permission")
            ->hasConfigFile("dd-permission");
    }
}
