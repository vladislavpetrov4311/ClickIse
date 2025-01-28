<?php

namespace App\Service\SelectOption;

use App\Service\SelectOption\ServiceSms;
use App\Service\SelectOption\ServiceEmail;
use App\Service\SelectOption\ServiceTelegram;
use App\DTO\SelectOptionDTO;

class ServiceGetCode {

    public function SelectServiceOption(SelectOptionDTO $dto) {
        
        switch ($dto->option) {
            case 'sms':
                return (new ServiceSms())->getCode();
            case 'email':
                return (new ServiceEmail())->getCode();
            case 'telegram':
                return (new ServiceTelegram())->getCode();
            default:
                return 'Не верно задана опция получения кода !';
        }
    }
}