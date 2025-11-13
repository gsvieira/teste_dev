<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description'];

    public function students() {
        return $this->belongsToMany(User::class, 'course_student', 'course_id', 'student_id');
    }

    public function classes() {
        return $this->belongsToMany(ClassModel::class, 'class_course', 'course_id', 'class_id');
    }
}
