<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "jobs";

    /**
     * Get the benefits for the job.
     */
    public function benefits()
    {
        return $this->belongsToMany('App\Benefit',
            'jobs_benefits_pivot',
            'job_id',
            'benefit_id');
    }
}
