<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    protected $guarded = [];

    public function getuser()
    {
        return $this->belongsToMany(User::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
