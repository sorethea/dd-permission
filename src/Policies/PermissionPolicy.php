<?php

namespace Sorethea\DdPermission\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Sorethea\DdUser\Models\User;
use Spatie\Permission\Models\Permission;

class PermissionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can("permissions.viewAny");
    }

    public function view(User $user, Permission $permission): bool
    {
        return $user->can("permissions.view");
    }

    public function create(User $user): bool
    {
        return $user->can("permissions.create");
    }

    public function update(User $user, Permission $permission): bool
    {
        return $user->can("permissions.update");
    }

    public function delete(User $user, Permission $permission): bool
    {
        return $user->can("permissions.delete");
    }

    public function restore(User $user, Permission $permission): bool
    {
        return $user->can("permissions.restore");
    }

    public function forceDelete(User $user, Permission $permission): bool
    {
        return $user->can("permissions.forceDelete");
    }
}
