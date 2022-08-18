<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('dashboard.students.index', [
            'students' => Student::paginate(10)
        ]);
    }

    public function create()
    {
        return view('dashboard.students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'gender' => ['required'],
            'nis' => ['nullable', 'numeric'],
            'class' => ['required'],
        ]);

        Student::create($validated);
        
        $request->session()->flash('success', 'Data siswa telah ditambahkan!');

        return redirect(route('student.index'));
    }

    public function edit(Student $student)
    {
        return view('dashboard.students.edit', [
            'student' => $student
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'gender' => ['required'],
            'nis' => ['nullable', 'numeric'],
            'class' => ['required'],
        ]);

        Student::where('id', $student->id)
            ->update($validated);
        
        return redirect(route('student.index'))->with('success', 'Data siswa telah diubah!');
    }

    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect(route('student.index'))->with('success', 'Data siswa telah dihapus!');
    }
}
