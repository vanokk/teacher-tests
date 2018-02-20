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
        return $this->hasMany('App\Models\Article');
    }
}
