<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Course extends Pivot
{
    //
    protected $primaryKey = ['professor_id','college_id'];
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
