<?php

namespace App\Service\SelectOption;

use App\Service\SelectOptionInterface\GenerateCode;

class ServiceEmail implements GenerateCode{

    public function getCode(): string {

        return 'generated code for Email';

    }
}