<?php

namespace App\Service\CheckCode;
use App\DTO\CheckCodeDTO;

class ServiceCheckCode {
    public function CheckCode(CheckCodeDTO $dto): bool {
        session_start();
        return $_SESSION['code'] == $dto->code ? true : false; // Если полученный код совпадает с тем, что вводит пользователь, тогда true, иначе false
    }
}