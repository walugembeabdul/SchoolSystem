<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsManager extends Controller
{
    public function add_students(){
        return view("students.add");
    }
    public function post_students(Request $request){
        $request->validate([
            "students_name"=>'required',
            "DOB"=>"required",
            "course"=>"required",
        ]);
        $student= new Students();
        $student->students_name=$request->students_name;
        $student->DOB=$request->DOB;
        $student->age=$request->age;
        $student->course=$request->course;
        if ($student->save()){
            return view("students.view")->with("success","new student enrolled into our system");
        }return redirect(route(""))
        ->with("error","follow the above steps to register a new student into the system");
    }
    public function view(){
        $students= Students::all();
        return view("students.view",compact("students"));
    }
    public function details(){
        $students= Students::all();
        return view("students.details",compact("students"));

    }
}
