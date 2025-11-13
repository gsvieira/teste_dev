<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    
    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'description' => 'nullable | string',
        ]);

        Course::create($request_only('name', 'description'));

        return redirect()->route('courses.index')->with('sucess', 'Course created');
    }

    public function show(string $id)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(string $id)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'description' => 'nullable | string',
        ]);

        Course::update($request->only('name', 'description'));

        return redirect()->route('courses.index')->with('sucess', 'Curso atualizado!');
    }

    public function destroy(string $id)
    {
        $course = Course::FindorFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('sucess', 'Curso deletado com sucesso');
    }
    
}
