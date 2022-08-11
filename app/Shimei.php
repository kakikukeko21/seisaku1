<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shimei extends Model
{
     use SoftDeletes;
    
    protected $fillable = [
        'title',
    ];
    
    public function posts()   
    {
    return $this->hasMany('App\Post');  
    }
}
