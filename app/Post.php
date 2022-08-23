<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'name_id'
    ];
    
    
    function getPaginateByLimit(int $limit_count = 5)
    {
    return $this::with('name')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function name()
    {
    return $this->belongsTo('App\Name');
    }
}