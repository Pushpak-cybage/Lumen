<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\api_keys;
class ApiKeysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_keys')->delete();
        DB::statement("ALTER TABLE api_keys AUTO_INCREMENT=1");
        $users=new users;
        $users= users::all();
        foreach($users as $user)
        {
           api_keys::insert(
               [
                   [
                       "user_id"=> $user->id,
                       "key"=>hash('sha256',Str::random(60))

                   ]
               ] );
        }
    }
}
