<?php

namespace App\Repositories;

use App\Models\Feedback;
use InfyOm\Generator\Common\BaseRepository;

class FeedbackRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Feedback::class;
    }
}
