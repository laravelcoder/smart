<?php

namespace App\Repositories;

use App\Models\Test;
use InfyOm\Generator\Common\BaseRepository;

class TestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'post_date',
        'email',
        'post_type',
        'category'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Test::class;
    }
}
