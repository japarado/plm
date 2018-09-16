<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    //

    protected $primaryKey = 'user_id';
    protected $table = 'professor';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function colleges()
    {
        return $this->belongsToMany(College::class, 'course', 'professor_id','college_id')
            /*->using(Course::class)*/
            /*->as('courses')*/
            ->withPivot('name','desc','duration','picture')
            ->withTimestamps();
    }

}
