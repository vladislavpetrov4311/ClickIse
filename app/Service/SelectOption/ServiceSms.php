<?php

namespace App\Service\SelectOption;

use App\Service\SelectOptionInterface\GenerateCode;

class ServiceSms implements GenerateCode{

    public function getCode(): string {

        $code = 'generated code for Sms';
        session_start();
        $_SESSION['code'] = $code;

        return $code;

    }
}