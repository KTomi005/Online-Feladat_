<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $username = 'John';
    return view('welcome', ['name' => $username]);
});

Route::get('/pass-array',function(){
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to the work'
    ];

    $foobar = "Some aditional data";

    return view('tasklist')->with(compact('foobar', 'tasks'));
}); 

Route::get('/request-test', function () {
    return view('request-inputs', [
        'title' => request('title')
    ]);
});

/*
request-test?title=<script>alert("Boom!");</script>
*/