<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable=[
        'date','time','availableuser','section','fees','township_id'
    ];

    public function township()
    {
        return $this->belongsTo('App\Township');
    }


}
