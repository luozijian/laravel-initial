<?php

namespace App\Repositories;

use App\Models\User;


class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_class_id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
