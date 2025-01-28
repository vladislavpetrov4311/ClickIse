<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectOptionController extends Controller
{
    public function __invoke() {
        return view('SelectOption');
    }
}
