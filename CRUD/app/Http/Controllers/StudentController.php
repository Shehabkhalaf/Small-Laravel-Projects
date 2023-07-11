<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $students = Student::onlyTrashed()->get();
        return view('trashed_data', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Student $student)
    {
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Student::withTrashed()->where('id', '=', $id)->forceDelete(); 
        return redirect()->route('students.index');
    }
    public function archeived($id)
    {
        Student::findorFail($id)->delete();
        return redirect()->route('students.index');
    }

    public function restore($id)
    {
        Student::withTrashed()->where('id', '=', $id)->restore();
        return redirect()->route('students.index');
    }
}