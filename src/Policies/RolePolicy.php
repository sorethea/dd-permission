<?php

namespace Sorethea\DdPermission\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Sorethea\DdUser\Models\User;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can("roles.viewAny");
    }

    public function view(User $user, Role $role): bool
    {
        return $user->can("roles.view");
    }

    public function create(User $user): bool
    {
        return $user->can("roles.create");
    }

    public function update(User $user, Role $role): bool
    {
        return $user->can("roles.update");
    }

    public function delete(User $user, Role $role): bool
    {
        return $user->can("roles.delete");
    }

    public function restore(User $user, Role $role): bool
    {
        return $user->can("roles.restore");
    }

    public function forceDelete(User $user, Role $role): bool
    {
        return $user->can("roles.forceDelete");
    }
}
