<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
    ];
    
    
    function getPaginateByLimit(int $limit_count = 5)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function name()
    {
    return $this->belongsTo('App\name');
    }
}