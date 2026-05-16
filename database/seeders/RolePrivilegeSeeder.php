<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Privilege;

class RolePrivilegeSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::where('name', 'Admin')->first();
        $manager = Role::where('name', 'Manager')->first();
        $staff = Role::where('name', 'Staff')->first();

        $allPrivileges = Privilege::pluck('id');

        // Admin gets all privileges
        $admin->privileges()->sync($allPrivileges);

        // Manager privileges
        $managerPrivileges = Privilege::whereIn('name', [
            'view_reports',
            'edit_user',
        ])->pluck('id');

        $manager->privileges()->sync($managerPrivileges);

        // Staff privileges
        $staffPrivileges = Privilege::whereIn('name', [
            'view_reports',
        ])->pluck('id');

        $staff->privileges()->sync($staffPrivileges);
    }
}