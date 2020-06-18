<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseFase extends Model
{
    protected $table = 'course_fase';
    protected $guarded = [];

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
