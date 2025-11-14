<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassroomController extends Controller
{
    public function index() {
        $classrooms = DB::select('SELECT * from classrooms');
        return view('classrooms.index', compact('classrooms'));
    }

    public function create() {
        return view('classrooms.create');
    }

    public function show($id) {
        $classroom = DB::select('SELECT * from classrooms WHERE id = ?', [$id]);
        return view('classrooms.show', ['classroom' => $classroom[0]]);
    }

    public function edit($id) {
        $classroom = DB::select('SELECT * from classrooms WHERE id = ?', [$id]);
        return view('classrooms.edit', ['classroom' => $classroom[0]]);
    }

    public function store(Request $request) {
        $request->validate([
            'name'=> 'required | string | max:255',
            'schedule' => 'nullable | date',
        ]);
        DB::insert('INSERT INTO classrooms (name, schedule) VALUES (?, ?)', [
            $request->name,
            $request->schedule
        ]);
        return redirect()->route('classrooms.index');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required | string | max:255',
            'schedule' => 'nullable | string'
        ]);
        DB::update('UPDATE classrooms SET name = ?, schedule = ? WHERE id = ?', [
            $request->name,
            $request->schedule,
            $id
        ]);

        return redirect()->route('classrooms.index');
    }

    public function attachToCourse(Request $request, $class_id) {
        $request->validate([
            'course_ids' => 'required | array',
            'course_ids.*' => 'integer | exists:courses_id',
        ]);

        foreach($request->course_ids as $courseId) {
            DB::insert('INSERT INTO class_course (class_id, course_id) VALUES (?,?)', [$classId, $courseId]);
        }
    }

    public function delete($id) {
        DB::delete('DELETE FROM classrooms WHERE id = ?', [$id]);
    }

}
