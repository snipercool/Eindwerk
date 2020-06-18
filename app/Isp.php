<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isp extends Model
{
    protected $table = 'isp';
    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
