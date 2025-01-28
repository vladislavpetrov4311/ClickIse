<?php
use App\Http\Controllers\SelectOptionController;
use App\Http\Controllers\SetOptionController;
use App\Http\Controllers\CheckCodeController;

Route::get('/main', SelectOptionController::class);
Route::post('SetOption', SetOptionController::class);
Route::post('CheckCode', CheckCodeController::class);