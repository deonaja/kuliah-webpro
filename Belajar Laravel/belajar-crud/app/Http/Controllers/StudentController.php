<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'kelas' => 'required',
            'gender' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'kelas' => 'required',
            'gender' => 'required'
        ]);
        
        $student =  Student::findOrFail($id);
        $student->update($request->all());
        
        return redirect()->route('students.index')->with('success', 'Data mahasiswa berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success','Data mahasiswa berhasil dihapus');
    }
}
