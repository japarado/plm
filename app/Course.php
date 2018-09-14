<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    protected $table = 'course';

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function college()
    {
        return $this->belongsTo(College::class);
    }
}
