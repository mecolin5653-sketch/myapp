<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Section;

class StudentController extends Controller
{
    // Show all students 
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show form to create a student 
    public function create()
    {
        $sections = Section::all();
        return view('students.create', compact('sections'));
    }

    // Save new student 
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('students.index');
    }

    // Show form to edit a student
    public function edit(Student $student)
    {
        $sections = Section::all();
        return view('students.edit', compact('student', 'sections'));
    }

    // Update student data
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    // Delete a student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
