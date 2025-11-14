<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'class_models';
    protected $fillable = ['name', 'schedule'];

    public function courses() {
        return $this->belongsToMany(Course::class, 'class_course', 'class_id', 'course_id');
    }
}
