<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return redirect()->route('jobs.index');
});
//     yung jobs== sa name ng route to http://127.0.0.1:8000/jobs  
Route::resource('jobs', JobController::class)
    ->only(['index', 'show']);