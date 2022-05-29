<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $jobs = Job::orderBy('created_at', 'desc')->paginate(3);
    return view('welcome')->with('jobs', $jobs);
});

Route::get('/about', function() {
    return view('about');
});

Route::resource('/jobs', 'JobsController');
