<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'description', 'image',
    ];

    public function township()
    {
        return $this->belongsToMany('App\Township','course_townships');
    }


}
