<?php

namespace App;

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
     * This value is used in the search table
     * @return String The firsts 30 characters of the post content
     */
    public function shortContent()
    {
        if (strlen($this->content) > 30){
            return substr($this->content,0,30) . "...";
        }

        return $this->content;
    }

    /**
     * Change the format of the created_at attribute
     * @return String The field created_at in format d/m/Y
     */
    public function formattedCreatedAt()
    {
        return $this->date($this->created_at);
    }

    /**
     * Change the format of the updated_at attribute
     * @return String The field updated_at in format d/m/Y
     */
    public function formattedUpdatedAt()
    {
        return $this->date($this->updated_at);
    }


    /**
     * Change the format of a mysql date
     * @param String A date in format Y-m-d H:i:s
     * @return String A date formatted to d/m/Y
     */
    public function date($date)
    {
        $formatted=Carbon::createFromFormat('Y-m-d H:i:s', $date);
        return $formatted->format('d/m/Y');
    }

}
