<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Action',
            'created_at' => now(),
            'updated_at' => now(),
           ]); 
           DB::table('categories')->insert([
            'title' => 'Fiction',
            'created_at' => now(),
            'updated_at' => now(),
           ]);
            DB::table('categories')->insert([
            'title' => 'Funny',
            'created_at' => now(),
            'updated_at' => now(),
           ]);
    }
}
