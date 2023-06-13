<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'M Azfa Asykarulloh',
                'email' => 'kangazfa@gmail.com',
                'city' => 'Cianjur',
                'password' => bcrypt('password')
            ],

            [
                'name' => 'Alifa Tazkia Irdani',
                'email' => 'alifatazkia@gmail.com',
                'city' => 'Bekasi',
                'password' => bcrypt('password')
            ]
        ])
        ->each(fn ($user) => User::create($user));
    }
}
