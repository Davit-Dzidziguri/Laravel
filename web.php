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
    return "Information about me";
});

Route::get('firstName', function () {
    return "Davit";
});

Route::get('lastName', function () {
    return "Dzidziguri";
});

Route::get('age', function () {
    return "21";
});

Route::get('hobby', function () {
    return "Playing basketball";
});

Route::get('currentUniversity', function () {
    return "BTU";
});


Route::post("/save", function () {
    return response()->json([
        "msg"=> "წარმატებით განახლდა"
    ]);
});

Route::put("/add", function () {
    return response()->json([
        "msg"=> "წარმატებით დაემატა"
    ]);
});

Route::delete("/delete", function () {
    return response()->json([
        "msg"=> "წარმატებით წაიშალა"
    ]);
});
