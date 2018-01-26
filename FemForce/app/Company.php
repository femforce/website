<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "companies";

    /**
     * Get the jobs for the company.
     */
    public function jobs()
    {
        return $this->hasMany('App\Job');
    }

    /**
     * Get the image for the company.
     */
    public function image()
    {
        return $this->belongsTo('App\Image', 'image_id');
    }
}
