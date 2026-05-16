<?php

namespace App\Services\Backend;

use App\Models\Privilege;

class PrivilegeService
{
    public function getAllPrivileges()
    {
        return Privilege::when(request('search'), function ($query) {
            $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        })
            ->latest()
            ->paginate(10);
    }

    public function createPrivilege(array $data): Privilege
    {
        return Privilege::create([
            'name' => $data['name'],
            'description' => $data['description'] ?? null,
        ]);
    }

    public function updatePrivilege(Privilege $privilege, array $data): Privilege
    {
        $privilege->update([
            'name' => $data['name'],
            'description' => $data['description'] ?? null,
        ]);

        return $privilege;
    }

    public function deletePrivilege(Privilege $privilege): void
    {
        $privilege->delete();
    }
}