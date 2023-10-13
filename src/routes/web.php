<?php

use Illuminate\Support\Facades\Route;
use KSHDestiny\Inspire\Controllers\InspirationController;

Route::get('/inspire',[InspirationController::class,'index']);
