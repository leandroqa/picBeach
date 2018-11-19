<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
   
    
    public function beach()
    {
        return $this->belongsTo(Beach::class);
    }
    

}