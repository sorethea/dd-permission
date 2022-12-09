<?php

namespace Sorethea\DdPermission;

use Filament\PluginServiceProvider;
use Sorethea\DdPermission\Filament\Resources\PermissionResource;
use Sorethea\DdPermission\Filament\Resources\RoleResource;
use Spatie\LaravelPackageTools\Package;

class PermissionServiceProvider extends PluginServiceProvider
{

    protected array $resources =[
        PermissionResource::class,
        RoleResource::class,
    ];
    public function configurePackage(Package $package): void
    {
        $package->name("dd-permission")
            ->hasTranslations()
            ->hasConfigFile("dd-permission");
    }
    public function packageBooted(): void
    {
        if($this->app->runningInConsole()){
            $this->publishes([
                __DIR__.'/../database/seeds/PermissionSeeder.php'=>database_path("seeders/PermissionSeeder.php")
            ],"dd-permission-seeds");
        }
    }
}
