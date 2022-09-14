<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('movies')->insert([
        'title' => 'Title',
        'description' => 'Description',
        'rate' => 3,
        'image' => '',
        'category' => '',
        'user_id' => 1,
        'category_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
       ]);
    }
}
