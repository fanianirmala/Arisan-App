<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'nia',
            'role' => 'admin',
            'email' => 'nia@gmail.com',
            'password' => bcrypt('nia123'),
            'remember_token' => Str::random(60),
        ]);
    }
}
