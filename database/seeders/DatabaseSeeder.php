<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(15)->create();
        
        Category::create([
            'name' => 'Uncategorized',
            'slug' => 'uncategorized',
        ]);

    

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);
        Post::factory(100)->recycle([
            User::all(),
            Category::all(), 
        ])->create();
    }
}
