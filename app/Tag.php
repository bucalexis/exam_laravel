<?php

namespace App;

use App\Http\Controllers\DateManager;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * Get all of the posts that are assigned to this tag.
     */
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'taggable');
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
