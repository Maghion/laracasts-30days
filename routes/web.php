<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;


Route::view("/", "home");
Route::view("/contact", "contact");

Route::resource('jobs', JobController::class);


