<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Book::firstOrCreate([
        'title'=>'unbranding',
        'user_id'=>1,
    ],[
        'author'=>'mamank garok',
        'year'=>'2020',
        'stock'=>1,
        'description'=>'sundul gan'
    ]);
    }
}
