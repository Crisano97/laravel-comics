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
    $comicData = config('comics');
    $headerLinkData = config('headerLinks');
    $mainLinkData = config('mainLinks');
    return view('home', ['comics' => $comicData, 'headerLinks' => $headerLinkData, 'mainLinks' => $mainLinkData]);
});
