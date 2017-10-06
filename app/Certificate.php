<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'place', 'image', 'code', 'slug'
    ];
    
    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }
}
