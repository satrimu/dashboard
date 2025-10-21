<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Super User',
            'email' => 'superadmin@santrimu.com',
            'password' => Hash::make('IniPasswordnya11!!'),
            'image' => 'default.png',
            'role' => 'superadmin',
            'is_active' => true,
            'full_name' => 'Super Admin',
            'address' => 'Jl. Super Admin No. 1',
            'phone' => '081234567890',
            'note' => 'This is a super admin user',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@santrimu.com',
            'password' => Hash::make('IniPasswordnya11!!'),
            'image' => 'default.png',
            'role' => 'admin',
            'is_active' => true,
            'full_name' => 'Admin',
            'address' => 'Jl. Super Admin No. 1',
            'phone' => '081234567890',
            'note' => 'This is a super admin user',
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@santrimu.com',
            'password' => Hash::make('IniPasswordnya11!!'),
            'image' => 'default.png',
            'role' => 'user',
            'is_active' => true,
            'full_name' => 'User Biasa',
            'address' => 'Jl. Super Admin No. 1',
            'phone' => '081234567890',
            'note' => 'This is a super admin user',
        ]);

        $this->call([
            // SettingappSeeder::class,
            // HujrohSeeder::class,
            // TeacherSeeder::class,
            // StudentSeeder::class,
        ]);
    }
}
