<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'content', 'catagory_id','feutured','slug'
    ];
    protected $dates = ['deleted_at'];
    public function getFeuturedAttribute($feutured) {
        return asset($feutured);
    }
    public function catagory() {
        return $this ->belongsTo('App\Catagory');
    }
    public function tags() {
        return $this ->belongsToMany('App\Tag');
    }
}
