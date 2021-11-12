<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->delete();
        DB::statement("ALTER TABLE teachers AUTO_INCREMENT=1");
        $faker = Faker::create();
         $limit = 50;
         for ($i = 0; $i < $limit; $i++) {
            DB::table('teachers')->insert([
                "name"=>$faker->name,
                "address"=>$faker->address,
                "phone"=>$faker->phoneNumber
            ]);
    }
}
}
