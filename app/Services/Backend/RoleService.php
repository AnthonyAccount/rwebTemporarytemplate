<?php

namespace App\Services\Backend;

use App\Models\Role;

class RoleService
{
    public function getAllRoles()
    {
        return Role::with('privileges')
            ->when(request('search'), function ($query) {
                $query->where('name', 'like', '%' . request('search') . '%');
            })
            ->latest()
            ->paginate(10);
    }

    public function createRole(array $data): Role
    {
        $role = Role::create([
            'name' => $data['name'],
        ]);

        $role->privileges()->sync($data['privileges'] ?? []);

        return $role;
    }

    public function updateRole(Role $role, array $data): Role
    {
        $role->update([
            'name' => $data['name'],
        ]);

        $role->privileges()->sync($data['privileges'] ?? []);

        return $role;
    }

    public function deleteRole(Role $role): void
    {
        $role->delete();
    }
}