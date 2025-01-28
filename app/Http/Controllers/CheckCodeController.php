<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckCodeRequest;
use App\DTO\CheckCodeDTO;
use App\Service\CheckCode\ServiceCheckCode;

class CheckCodeController extends Controller
{
    public function __invoke(CheckCodeRequest $request, ServiceCheckCode $service) {

       return $service->CheckCode(new CheckCodeDTO($request->validated())) 
       ? response()->json(["Response" => "Код совпадает"])
       : response()->json(["Response" => "Код НЕ совпадает"]);
       
    }
}
