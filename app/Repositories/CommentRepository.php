<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Comment;
//use Your Model

/**
 * Class CommentRepository.
 */
class CommentRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Comment::class;
    }

    public function all_comments(){
        $comment = $this->model->with('responses')->get();
        return  $comment;
    }
    public function save($data){
        $comment = $this->model->create($data);
        return $comment;
    }
}
