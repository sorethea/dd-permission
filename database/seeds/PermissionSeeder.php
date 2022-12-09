<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $role = Role::findOrCreate("admin");
        $roleList =[
            "roles.viewAny",
            "roles.view",
            "roles.create",
            "roles.update",
            "roles.delete",
            "roles.restore",
            "roles.forceDelete",
        ];
        foreach ($roleList as $perm){
            Permission::findOrCreate($perm);
            $role->givePermissionTo($perm);
        }
        $permissionList =[
            "permissions.viewAny",
            "permissions.view",
            "permissions.create",
            "permissions.update",
            "permissions.delete",
            "permissions.restore",
            "permissions.forceDelete",
        ];
        foreach ($permissionList as $perm){
            Permission::findOrCreate($perm);
            $role->givePermissionTo($perm);
        }
    }
}
