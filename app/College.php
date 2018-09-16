<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //
    protected $table = 'college';

    public function professors()
    {
        return $this->belongsToMany(Professor::class, 'course','college_id','professor_id')
            ->using(Course::class)
            /*->as('courses')*/
            ->withPivot('name','desc','duration','picture')
            ->withTimestamps();
    }
}
