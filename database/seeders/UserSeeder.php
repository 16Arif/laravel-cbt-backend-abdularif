<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'name' => 'Admin Arif',
            'email' => 'Arif0002@gmail.com',
            'password'=> Hash::make('123qwe'),
            'roles' => 'ADMIN',
            'phone' => '08123456789'
        ]);

        \App\Models\User::factory(10)->create();
    }
}
