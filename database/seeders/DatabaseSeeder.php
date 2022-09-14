<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(20)->create();
       
        $movie = Movie::factory(30)->create();
        $category = Category::factory(10)->create();

        // \App\Models\User::factory(20)->create([
        //     'name' => '',
        //     'email' => '',
        //     'birthday' => now(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
