<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Classroom;
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Course::create($request->only('name', 'description'));

        return redirect()->route('courses.index')->with('sucess', 'Course created');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $course = Course::with('classrooms')->findOrFail($course->id);

        $classrooms = Classroom::all();
        return view('courses.edit', compact('course, classrooms'));
    }

    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'name' => 'required | string | max:255',
            'description' => 'nullable | string',
            'classroom' => 'array',
        ]);
        $course->update($request->only('name', 'description'));

        $course->classrooms()->sync($request->classrooms ?? []);

        return redirect()->route('courses.index')->with('sucess', 'Curso atualizado!');
    }

    public function destroy(string $id)
    {
        $course = Course::FindorFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('sucess', 'Curso deletado com sucesso');
    }
 
    public function editClassrooms(Course $course)
    {
        $course = Course::with('classrooms')->findOrFail($course->id);
        $classrooms = Classroom::all();
        return view('courses.classrooms', compact('course', 'classrooms'));
    }

    public function updateClassrooms(Request $request, Course $course)
    {
        $course->classrooms()->sync($request->classrooms ?? []);

        return redirect()
            ->route('courses.show', $course->id)
            ->with('success', 'Salas atualizadas com sucesso!');
    }    
}
