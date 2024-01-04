<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(15)->create();

        User::create([
            'name' => 'khairin',
            'email' => 'khairin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'),
            'roles' => 'mahasiswa',
        ]);
    }
}
