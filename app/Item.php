<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'description', 'image','category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }


}
