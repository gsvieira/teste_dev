<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassroomController extends Controller
{
    public function index() {
        $classroom = DB::select('SELECT * from classroom');
        return view('classroom.index', compact('classroom'));
    }

    public function show($id) {
        $class = DB::select('SELECT * from classroom WHERE id = ?', [$id]);
        return view('classroom.show', ['class' => $class[0]]);
    }

    public function store(Request $request) {
        $request->validate([
            'name'=> 'required | string | max:255',
            'schedule' => 'nullable| string',
        ]);
        DB::insert('INSERT INTO classroom (name, schedule) VALUES (?)', [
            $request->name,
            $request->schedule
        ]);
        return redirect()->route('classroom.index');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required | string | max:255',
            'schedule' => 'nullable | string'
        ]);
        DB::update('UPDATE classroom SET name = ?, schedule = ? WHERE id = ?', [
            $request->name,
            $request->schedule,
            $id
        ]);

        return redirect()->route('classroom.index');
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
        DB::delete('DELETE FROM classroom WHERE id = ?', [$id]);
    }

}
