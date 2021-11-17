<?php

namespace App\Http\Middleware;
use App\Models\api_keys;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Closure;

class UserPermission
{
  public function handle($request, Closure $next,$level)
    {
  
        $Apikey=$request->bearerToken();
        $ApiInfo=DB::table('api_keys') 
        -> where ('key','=',$Apikey)
        -> get();
        $UserInfo=Users ::find($ApiInfo[0]->user_id);
        if(!empty($UserInfo))
        {
            $UserPermission=$UserInfo->permission_level;

            if($UserPermission < $level)
            {
               return response()->json("Invalid Permission for this user");
            }
        }
            else
            {
                return response()->json("User not Found",404);
            }
        
    
        $response = $next($request);
        return $response;
    
}
}
