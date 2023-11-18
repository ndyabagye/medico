<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creating the super admin user
        $superAdmin = User::create([
            'name' => 'Ndyabagye Henry',
            'email' => 'ndyabagyehenrytusi@gmail.com',
            'password' => Hash::make('henry12345')
        ]);

        $superAdmin->assignRole('Super Admin');

        //creating the admin user
        $admin = User::create([
            'name' => 'Tobias Matthew',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345')
        ]);
        $admin->assignRole('Admin');

        //creating the doctor user
        $doctor = User::create([
            'name' => 'David Hanselhof',
            'email' => 'doctor@gmail.com',
            'password' => Hash::make('doctor12345')
        ]);
        $doctor->assignRole('Doctor');

        //creating the patient user
        $patient = User::create([
            'name' => 'Tems Olatunde',
            'email' => 'patient@gmail.com',
            'password' => Hash::make('patient12345'),
        ]);
        $patient->assignRole('Patient');
    }
}
