<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'example',
            'email' => 'example@example.com',
            'birthday' => '2022-09-12',
            'created_at' => now(),
            'updated_at' => now(),
           ]);
    }
}
