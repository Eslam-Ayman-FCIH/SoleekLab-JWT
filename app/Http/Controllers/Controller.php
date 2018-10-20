<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function validate($request , $array)
    {
        $validatorResult = Validator::make($request->all(), $array);
        if ($validatorResult->fails())
            return response(['Error Message'=>$validatorResult->messages()], 422);
    }
}
