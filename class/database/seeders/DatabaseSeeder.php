<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ApikeysTableSeeder::class);
         $this->call(CoursesTableSeeder::class);
         $this->call(TeacherTableSeeder::class);
    }
}
