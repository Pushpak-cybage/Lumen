<?php

namespace Database\Seeders;
use App\Models\Teachers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('courses')->delete();
        DB::statement("ALTER TABLE courses AUTO_INCREMENT=1");
        $t_id=[];
        $t_id=Teachers::pluck('id')->all();
         $limit = 10;
         for ($i = 0; $i < $limit; $i++) {
            DB::table('courses')->insert([
            'title' => $faker->title,
            'description' => $faker->sentence(6),
           'value'=> $faker->numerify('#####'),
           'teacher_id'=>array_rand($t_id)
            ]);
        }
    }
}

