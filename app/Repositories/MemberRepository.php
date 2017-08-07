<?php

namespace App\Repositories;

use App\Models\Member;
use InfyOm\Generator\Common\BaseRepository;

class MemberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'team_id',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Member::class;
    }
}
