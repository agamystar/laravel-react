<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/get_face', 'FaceDetection@detect');

Route::get('/run/{command}/edokdidj;=7jd82378274csdhjfhs;', function($command) {
    $status = Artisan::call($command);
    return '<h1>Configurations cache cleared</h1>';
});