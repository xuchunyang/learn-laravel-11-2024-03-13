<?php

use App\Events\Greeted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/message', function () {
    $message = request()->input('message', 'hello');
    return Greeted::dispatch($message);
});
