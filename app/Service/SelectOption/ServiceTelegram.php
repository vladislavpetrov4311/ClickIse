<?php

namespace App\Service\SelectOption;

use App\Service\SelectOptionInterface\GenerateCode;

class ServiceTelegram implements GenerateCode{

    public function getCode(): string {

        return 'generated code for Telegram';

    }
}