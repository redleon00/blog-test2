<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function validateRequest(Request $request, $rules)
    {
        $validator = Validator::make(
            $request->all(),
            $rules
        );

        if ($validator->fails()) {    
            throw new ValidationException($validator->getMessageBag());
        }
        
        $validator->validate();
        return $validator->validated();
    }
}
