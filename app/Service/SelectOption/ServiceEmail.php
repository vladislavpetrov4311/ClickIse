<?php

namespace App\Service\SelectOption;

use App\Service\SelectOptionInterface\GenerateCode;

class ServiceEmail implements GenerateCode{

    public function getCode(): string {
        
        $code = 'generated code for Email';
        session_start();
        $_SESSION['code'] = $code;

        return $code;

    }
}