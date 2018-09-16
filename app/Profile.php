<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $primaryKey = 'user_id';
    protected $table = 'profile';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
