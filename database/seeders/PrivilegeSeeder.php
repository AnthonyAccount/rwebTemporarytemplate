<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Privilege;

class PrivilegeSeeder extends Seeder
{
    public function run(): void
    {
        $privileges = [
            'Dashboard',
            'Users',
            'Roles',
            'Privileges',
            'Settings',
        ];

        foreach ($privileges as $privilege) {
            Privilege::firstOrCreate([
                'name' => $privilege
            ]);
        }
    }
}