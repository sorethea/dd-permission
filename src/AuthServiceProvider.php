<?php

namespace Sorethea\DdPermission;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Sorethea\DdPermission\Policies\PermissionPolicy;
use Sorethea\DdPermission\Policies\RolePolicy;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class
    ];

    public function boot()
    {
        //$this->registerPolicies();
    }
}
