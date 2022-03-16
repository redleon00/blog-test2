<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentRepository;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct() {
        $this->repository = new CommentRepository();
    }
    //
    public function getComments(){
        try {
            $comments = $this->repository->all_comments();
            
            return response()->json([
                'comments' => $comments
            ], Response::HTTP_OK);

        } catch (\Throwable $th) {
            return response()->json(['comments' =>[], 'message' => $th->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function postComments(Request $request ){
        try {
            $validateData = $this->validateData($request);
            $data = [
                'user' => $validateData['user'],
                'comments' => $validateData['comments'],
            ];
            $this->repository->save($data);
            return response()->json(['message' => 'Order created'], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function validateData($request){
        $rules = [
            'user' => ['required'],
            'comments' => ['required'],
            
        ];
        $validateData = $this->validateRequest($request, $rules);

        return $validateData;
    }
}
