<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){
        return Student::all();
    }

    public function getStudentById($id)
    {
        return Student::find($id);
    }

    public function create(request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->save();
        return "Data Saved Successfull.";
    }

    public function update(request $request, $id){
        $name = $request->name;
        $address = $request->address;

        $student = Student::find($id);
        $student->name = $name;
        $student->address =$address;
        $student->save();
        return "Data Updated Successfull.";
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return "Data Deleted Successfull.";
    }
}
