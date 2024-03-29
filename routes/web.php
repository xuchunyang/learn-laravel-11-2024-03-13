<?php

use App\Events\Greeted;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/message', function () {
    $message = request()->input('message', 'hello');
    return Greeted::dispatch($message);
});

Route::get('/ok', fn () => 'OK');
