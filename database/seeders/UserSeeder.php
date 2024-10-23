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
            'name' => 'wanda',
            'role' => 'admin',
            'email' => 'wanda@gmail.com',
            'password' => bcrypt('wanda123'),
            'remember_token' => Str::random(60),
        ]);
    }
}
