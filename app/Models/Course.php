<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description'];

    public function students() {
        return $this->belongsToMany(User::class, 'course_student', 'course_id', 'student_id');
    }

    public function classrooms() {
        return $this->belongsToMany(Classroom::class, 'classroom_course', 'course_id', 'classroom_id');
    }
}
