<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $guarded = [];

    public function education()
    {
        return $this->belongsTo(Education::class);
    }

    public function fases()
    {
        return $this->hasMany(CourseFase::class);
    }
}
