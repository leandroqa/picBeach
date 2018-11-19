<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beach extends Model
{

    /**
     * The table name.
     *
     * @var string
     */
    protected $table = 'beaches';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'region_name', 'name','description'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function pics()
    {
        return $this->hasMany(Pic::class);
    }


    public function region()
    {
        return $this->belongsTo(Region::class);
    }





}