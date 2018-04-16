<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "blogs";

    /**
     * Get the user for the job.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Get the image for the company.
     */
    public function image()
    {
        return $this->belongsTo('App\Image', 'image_id');
    }

}
