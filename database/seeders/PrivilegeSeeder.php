<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Privilege;

class PrivilegeSeeder extends Seeder
{
    public function run(): void
    {
        $privileges = [
            'create_user',
            'edit_user',
            'delete_user',
            'view_reports',
            'manage_roles',
        ];

        foreach ($privileges as $privilege) {
            Privilege::firstOrCreate([
                'name' => $privilege
            ]);
        }
    }
}