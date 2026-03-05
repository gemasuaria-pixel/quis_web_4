<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate([
            'name' => 'Gema suaria',
            'password' => bcrypt('password'), // password
            'email' => 'test@example.com',
            'email_verified_at' => now(),
        ]);

       

    }
}
