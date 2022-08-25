<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];
    
    public function getByLimit(int $limit_count = 10)
    {
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function post()
    {
        return $this->belongsTo('App\post');
    }
}