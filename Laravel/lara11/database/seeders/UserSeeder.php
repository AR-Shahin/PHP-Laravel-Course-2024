<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i =1;$i<=100;$i++){
            DB::table('users')->insert([
                "name" => "seeder user",
                "email" => "seed".rand(1,1000)."@mail.com",
                "password" => bcrypt("12")
            ]);
        }
    }
}
