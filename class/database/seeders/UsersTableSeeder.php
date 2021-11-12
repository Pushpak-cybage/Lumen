<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::statement("ALTER TABLE users AUTO_INCREMENT=1");
        DB::table('users')->insert([
            [
               'name'=>'chandrasen',
               'email'=>'chandrasen@gmail.com',
               'password'=>'chand123',
               'permission_level'=>200

            ],
            [
                'name'=>'deepak',
                'email'=>'deepakn@gmail.com',
                'password'=>'deepak123',
                'permission_level'=>400
            ],
            [
                'name'=>'ritik',
                'email'=>'ritik@gmail.com',
                'password'=>'ritik123',
                'permission_level'=>600
            ],
            [
                'name'=>'komal',
                'email'=>'komal@gmail.com',
                'password'=>'komal123',
                'permission_level'=>800
            ]
            ]);
    }
}
