<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Name extends Model
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
