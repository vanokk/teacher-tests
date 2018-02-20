<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'body',
        'excerpt',
        'published',
        'user_id',
        'category_id',
    ];

    /**
     * The User is owned by a article
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * The Category is owned by a article
     * @return mixed
     */
    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * Only published articles
     * @param $query
     *
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }
}
