<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'agency', 'link' ,'order' ,'month' ,'year', 'description', 'media', 'slug'
    ];

    public function images()
    {
        return $this->hasMany('App\PortfolioImage');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }
}
