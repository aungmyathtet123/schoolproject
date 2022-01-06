<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    protected $fillable = [
       'name','city_id'
    ];

    public function course()
    {
        return $this->belongsToMany('App\Course','course_townships');
    }
}
