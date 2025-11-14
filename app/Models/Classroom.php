<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'classrooms';
    protected $fillable = ['name', 'schedule'];

    public function courses() {
        return $this->belongsToMany(Course::class, 'classroom_course', 'classroom_id', 'course_id');
    }
}
