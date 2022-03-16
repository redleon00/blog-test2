<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ResponseRepository;
use Symfony\Component\HttpFoundation\Response;


class ResponseController extends Controller
{
    public function __construct() {
        $this->repository = new ResponseRepository();
    }
    //
    public function postResponse(Request $request){
        echo "llego a la func ".$request;
        try {
            $validateData = $this->validateData($request);
            $data = [
                'commnent_id' => $request->id_c,
                'user' => $validateData['user'],
                'response' => $validateData['response'],
            ];
            $this->repository->save($data);
            return response()->json(['message' => 'Order created'], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['reponse' =>[], 'message' => $th->getMessage()], Response::HTTP_OK);
        }
    }

     private function validateData($request){
        $rules = [
            'user' => ['required'],
            'response' => ['required'],
            
        ];
        $validateData = $this->validateRequest($request, $rules);

        return $validateData;
    }
}
