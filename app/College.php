<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //
    protected $table = 'college';

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
