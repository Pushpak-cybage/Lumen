<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
class CourseController extends Controller
{
    
    public function index()
    {
        $Course = Courses::all();
        return response()->json($Course);
    }

    
    public function create()
    {
        
    }

 
    public function store(Request $request)
    {
        
    }

     public function show11($id)
    {
        $Course =Courses::find ($id);
        return response()->json($Course);
    }
  
    public function edit($id)
    {
        
    }

  
    public function update(Request $request, $id)
    {
        
    }

 
    public function destroy($id)
    {
        
    }
}
