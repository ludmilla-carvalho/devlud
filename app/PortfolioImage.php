<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'portfolio_id' ,'image'
    ];

    public function portfolio()
    {
        return $this->belongsTo('App\Portfolio');
    }
}
