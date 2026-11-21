<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Teacher";
        $teachers = Teacher::with('subject')->get();
        $subjects = Subject::all();

        return view('admin.teacher.index', [
            'title' => $title,
            'teachers' => $teachers,
            'subjects' => $subjects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Teacher';
        $subjects = Subject::orderBy('name')->get();

        return view('admin.teacher.create', [
            'title' => $title,
            'subjects' => $subjects,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'niy' => 'required|numeric|unique:teachers,niy',
            'subject_id' => 'required|exists:subjects,id',
            'start_date' => 'required|date',
        ]);

        $subjectSudahDipakai = Teacher::where('subject_id', $validated['subject_id'])->exists();

        if ($subjectSudahDipakai) {
            return back()->withErrors([
                'subject_id' => 'Subject ini sudah memiliki guru.'
            ])->withInput();
        }

        Teacher::create($validated);

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher berhasil ditambahkan.');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
