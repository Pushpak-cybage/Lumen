<?php

namespace App\Http\Middleware;
use App\Models\api_keys;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Closure;

class CheckUser
{
   
    public function handle($request, Closure $next)
    {
       $Apikey=new api_keys;
       $Apikey=$request->bearerToken();
       $User_id=$request->id;
       if($Apikey && $User_id)
       {
        $apikey=DB::table('api_keys')
        ->where ('user_id','=',$User_id) 
        ->get();
       }

       if($apikey[0]->key!=$Apikey)
       {
       return response()->json("Please provide a valid key");
       }
        $response = $next($request);
        return $response;
    }
}
