<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionRequest;
use App\Service\SelectOption\ServiceGetCode;
use App\DTO\SelectOptionDTO;

class SetOptionController extends Controller
{
    public function __invoke(OptionRequest $request, ServiceGetCode $service) {
        
        $code = $service->SelectServiceOption(new SelectOptionDTO($request->validated()));

        return response()->json(["Code" => $code]);
    }
}
