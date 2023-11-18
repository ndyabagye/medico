<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $doctor = Role::create(['name' => 'Doctor']);
        $patient = Role::create(['name' => 'Patient']);

        $admin->givePermissionTo([
            'create_user',
            'edit_user',
            'delete_user',
            'create_appointment',
            'edit_appointment',
            'delete_appointment',
        ]);

        $doctor->givePermissionTo([
            'create_appointment',
            'edit_appointment',
            'delete_appointment',
        ]);

        $patient->givePermissionTo([
            'edit_appointment',
        ]);
    }
}
