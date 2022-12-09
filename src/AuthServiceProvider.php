<?php

namespace Sorethea\DdPermission;

use Illuminate\Support\ServiceProvider;
use Sorethea\DdPermission\Policies\PermissionPolicy;
use Sorethea\DdPermission\Policies\RolePolicy;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    protected array $policies = [
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class

    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
