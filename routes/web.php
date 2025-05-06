<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use App\Models\Job;
use \App\Jobs\TranslateJob;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {

    $job = Job::first();
    TranslateJob::dispatch($job);

    return 'done';
});

Route::view("/", "home");
Route::view("/contact", "contact");

//Route::resource('jobs', JobController::class);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware("auth");
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::patch('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware("auth")
    ->name("edit", "job");

Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);



Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/login', [SessionController::class, 'destroy']);

