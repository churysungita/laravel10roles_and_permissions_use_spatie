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
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Chury User', 
            'email' => 'user@churysungita.com',
            'password' => Hash::make('chury1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'chury m sungital', 
            'email' => 'admin@churysungita.com',
            'password' => Hash::make('chury1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Churym Sungita', 
            'email' => 'productm@churysungita.com',
            'password' => Hash::make('chury1234')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
