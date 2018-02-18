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
        'published',
        'user_id'
    ];

    /**
     * The User is owned by a article
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    /**
     * The Category is owned by a article
     * @return mixed
     */
    public function categories(){
        return $this->belongsTo('App\Models\Category')->withTimestamps();
    }

    /**
     * Get a list of tag ids associadet with thecurrent article
     * @return array
     */
    public function getTagListAttribute(){
        return $this->tags->lists('id')->all();
    }

    /**
     * Returns a formatted post content entry,
     * this ensures that line breaks are returned.
     *
     * @return string
     */
    public function body()
    {
        return nl2br($this->body);
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
