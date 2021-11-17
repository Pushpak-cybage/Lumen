<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function show() 
    {
        return(" User is validated can proceed further");
    }

    public function show1() 
    {
        return(" User Permission Allowed");
    }
}
