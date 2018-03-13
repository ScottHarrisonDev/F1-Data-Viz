<?php

use Illuminate\Http\Request;

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

Route::get('/circuits/mostPopular', function (App\Circuit $circuit) {
    return $circuit->mostPopular();
});
Route::get('/nations/mostSuccessful', function (App\Nation $nation) {
    return $nation->mostSuccessful();
});
Route::get('/nations/mostPopular', function (App\Nation $nation) {
    return $nation->mostPopular();
});
Route::get('/drivers/mostSuccessfulByDecade', function (App\Driver $driver) {
    return $driver->mostSuccessfulByDecade();
});