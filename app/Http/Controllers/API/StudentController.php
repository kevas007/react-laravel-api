<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return response()->json([
            'status'=>200,
            'students'=> $students,
        ]);
    }
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input("name");
        $student->LastName = $request->input("LastName");
        $student->email = $request->input("email");
        $student->password = $request->input("password");
        $student->save();
        return response()->json([
            'status'=>200,
            'message'=>'Student created successfully'
        ]);
    }
}
