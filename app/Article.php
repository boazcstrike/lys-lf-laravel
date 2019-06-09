<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'subtitle', 'content', 'background_url', 'user_id', 'category_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * Get the User for the Article.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the Category for the Article.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get the Tags for the Article.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}