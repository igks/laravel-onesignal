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


Route::get('/notify', function () {
    $data = [
        'userId' => '5b5c7585-a117-442d-98e2-fcc4cac76929',
        'title' => 'This is new title',
        'content' => 'This content is for specific user',
    ];
    return OneSignal::sendSpecificUser($data);
});
