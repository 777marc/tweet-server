<?php

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/tweets', function () {
    sleep(2);
    return Tweet::with('user:id,name,username,avatar')->latest()->get();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
