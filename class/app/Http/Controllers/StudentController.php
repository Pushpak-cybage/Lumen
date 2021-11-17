<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function index()
    {
        $Student = Student::all();
         return response()->json($Student);
    }

    
    public function create()
    {
        
    }

  
    public function store(Request $request)
    {
       
    }

    
    public function show11($id)
    {
       
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
