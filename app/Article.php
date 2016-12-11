<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
    	'title',
    	'description',
    	'price',
    	'image',
    	'category',
    	'video',
    	'body',
        'author_id',
        'course_id'
    ];

    /**
     * Get the comments for the article.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Get the author that wrote the article.
     */
    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    /**
     * Get the course that the article belongs to.
     */
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    /**
     * Get the tags that the article has.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }


    /**
     * Get the list of tag ids that the article has.
     */
    public function getTagListAttribute()
    {
        return $this->tags->pluck('id')->all();
    }

}
