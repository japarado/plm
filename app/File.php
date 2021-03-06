<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $table = 'file';

    public function professor()
    {
        return $this->belongsTo(Professor::class,'professor_id','user_id');
    }
}
