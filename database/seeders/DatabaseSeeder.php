<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Kyaw Ko Ko Zin',
            'email' => 'kyawkokozin223@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("admin1111"),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Kyaw Zin Thet',
            'email' => 'kyawzinthett7@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("admin1111"),
            'remember_token' => Str::random(10),
        ]);

    }
}
