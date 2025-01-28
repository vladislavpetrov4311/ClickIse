<?php

namespace App\DTO;

class CheckCodeDTO {

    public $code;

    public function __construct($data) {
        $this->code = $data['CheckCode'];
    }
}