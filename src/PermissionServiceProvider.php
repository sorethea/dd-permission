<?php

namespace Sorethea\DdPermission;

use Filament\PluginServiceProvider;
use Sorethea\DdPermission\Filament\Resources\PermissionResource;
use Sorethea\DdPermission\Filament\Resources\RoleResource;
use Sorethea\DdPermission\Policies\PermissionPolicy;
use Sorethea\DdPermission\Policies\RolePolicy;
use Spatie\LaravelPackageTools\Package;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionServiceProvider extends PluginServiceProvider
{

    protected array $resources =[
        PermissionResource::class,
        RoleResource::class,
    ];

    protected $policies = [
        Permission::class => PermissionPolicy::class,
        Role::class => RolePolicy::class
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

        $this->registerPolicies();
    }
}
