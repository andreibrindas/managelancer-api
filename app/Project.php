<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function project() 
    {
        return $this->belongsTo(User::class);
    }
}
