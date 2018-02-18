<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    /**
     * Fields for tags
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article');
    }


//    public function articlesByTag($tag){
//
//        return $this->belongsToMany('App\Article');//->withTimestamps();
//    }
}
