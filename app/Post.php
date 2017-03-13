<?php

namespace App;

use App\Http\Controllers\DateManager;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','slug','content'];


    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    /**
     * Get the user who created the post.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Convert all the tags into a single string
     * @return String The tags separated by a comma
     */
    public function tagsToString()
    {
        $string = "";
        foreach ($this->tags as $tag){
            $string = $string.$tag->name.', ';
        }

        $string = rtrim($string, ', ');
        return $string;
    }

    /**
     * Change the format of the created_at attribute
     * @return String The field created_at in format d/m/Y
     */
    public function formattedCreatedAt()
    {
        return DateManager::dateToDmy($this->created_at);
    }

    /**
     * Change the format of the updated_at attribute
     * @return String The field updated_at in format d/m/Y
     */
    public function formattedUpdatedAt()
    {
        return DateManager::dateToDmy($this->updated_at);
    }



}
