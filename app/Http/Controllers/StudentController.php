<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class StudentController extends Controller
{
    public function index(){

    	$students = Student::all();

    	return view('home', compact('students'));

    }

    public function store(){

        request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
    	
    	$student = new Student;
    	$student->name = Request('name');
    	$student->description = Request('description');
    	$student->save();
        session()->flash('success', 'your data has been saved');
    	return back();
    }

    public function show($student){
        $students = Student::find($student);

        return view('show', compact('students'));
    }

    public function delete($student){
        
        $students = Student::find($student)->delete();
        return redirect("/tutorial")->with('success', 'your data has been deleted');
    }

    public function edit($student){
        $students = Student::find($student);
        return view('update', compact('students'));
    }

    public function update($student){
        $students = Student::find($student);
        $students->name = request('name');
        $students->description = request('description');
        $students->save();
        
        return back()->with('success', 'your data has been updated');
    }
}
