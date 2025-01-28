<?php

namespace App\DTO;

class SelectOptionDTO {
    
    public $option;

    public function __construct($data) {
        $this->option = $data['Option'];
    }
}