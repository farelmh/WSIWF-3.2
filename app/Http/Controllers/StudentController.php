<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::all();
        return view('student.index', compact('data'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('student.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->route('student.index');
    }

    public function destroy(string $id)
    {
        Student::find($id)->delete();
        return redirect()->route('student.index');
    }
}
