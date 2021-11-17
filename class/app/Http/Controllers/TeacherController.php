<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;

class TeacherController extends Controller
{
    
    public function index()
   {
        $Teacher = Teachers::all();
        return response()->json($Teacher);
    }
    

  
    public function create()
    {
        
    }


    public function store(Request $request)
    {
        $Teacher =new Teachers();
        $Teacher->name=$request->input('name');  //'name','address','phone'
        $Teacher->address=$request->input('address');
        $Teacher->phone=$request->input('phone');
        $Teacher->save();
        return response()->json($Teacher, 201);
    }

    
    public function show11($id)
    {
        $Teacher =Teachers::all();     
        return response()->json($Teacher);
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
