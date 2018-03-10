<?php

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

Route::get('api/circuits/mostPopular', function (App\Circuit $circuit) {
    return $circuit->mostPopular();
});
Route::get('api/nations/mostSuccessful', function (App\Nation $nation) {
    return $nation->mostSuccessful();
});
Route::get('api/nations/mostPopular', function (App\Nation $nation) {
    return $nation->mostPopular();
});
Route::get('api/drivers/mostSuccessfulByDecade', function (App\Driver $driver) {
    return $driver->mostSuccessfulByDecade();
});
Route::get('/', function () {
    return view('index');
});
