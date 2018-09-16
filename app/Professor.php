<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    //

    protected $table = 'professor';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}
