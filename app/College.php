<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //

    public function professors()
    {
        return $this->hasMany(Professor::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
