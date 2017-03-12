<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\view;

class StudentController extends Controller
{
    //
    public function showForm(){
    	return view('student-registrations');
    }

    public function add(Request $request){

    	$number = $request->studNumber;
    	$name = $request->studName;
    	$course = $request->course;
    	$year = $request->year;
    	$address = $request->address;

    	$students = new student;
    	$students->studNumber = $number;
    	$students->studName = $name;
    	$students->course = $course;
    	$students->year = $year;
    	$students->address = $address;

    	$students->save();

        return redirect('/students');
    }

    public function delete(Request $request, $id){

        $student = student::find($id);
        $student->delete();

        return redirect('/students/manage');
    }

    public function edit(Request $request, $id){

        $students = student::where('id', $id)->get();

        return view('edit-student', compact('students'));
    }

    public function update(Request $request, $id){

        student::where('id', $id)->update([
            'studNumber' => $request->studNumber,
            'studName' => $request->studName,
            'course' => $request->course,
            'year' => $request->year,
            'address' => $request->address
            ]);

        return redirect('/students');
    }

    public function studentsList(Request $request){

        $students = student::all();

        return view('students-list', compact('students'));
    }

    public function manage(){

        $students = student::all();

        return view('manage-students', compact('students'));
    }
}
