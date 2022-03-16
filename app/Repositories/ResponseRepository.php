<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Response;
//use Your Model

/**
 * Class ResponseRepository.
 */
class ResponseRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Response::class;
    }

    public function save($data){
        $responses = $this->model->create($data);
        return $responses;
    }
}
