<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'image', 'order', 'slug'
    ];
    
    public function certificates()
    {
        return $this->belongsToMany('App\Certificate');
    }

    public function portfolios()
    {
        return $this->belongsToMany('App\Portfolio');
    }
}
