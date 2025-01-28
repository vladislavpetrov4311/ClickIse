<?php

namespace App\Service\SelectOption;

use App\Service\SelectOptionInterface\GenerateCode;

class ServiceTelegram implements GenerateCode{

    public function getCode(): string {

        $code = 'generated code for Telegram';
        session_start();
        $_SESSION['code'] = $code;

        return $code;

    }
}