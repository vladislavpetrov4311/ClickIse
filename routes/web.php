<?php
use App\Http\Controllers\SelectOptionController;
use App\Http\Controllers\SetOptionController;

Route::get('/main', SelectOptionController::class);
Route::post('SetOption', SetOptionController::class);