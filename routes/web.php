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
    return view('index');
});

Route::get('about-us', function () {
    return view('about-us');
});


Route::get('our-services', function () {
    return view('our-services');
});

Route::get('our-method', function () {
    return view('our-method');
});
Route::get('service/tax-efficient-investment', function () {
    return view('services/tax-investment');
});

Route::get('service/estate-planning', function () {
    return view('services/estate-planning');
});

Route::get('service/retirement-planning', function () {
    return view('services/retirement-planning');
});

Route::get('service/capital-growth-service', function () {
    return view('services/capital-service');
});
Route::get('service/hedge-fund', function () {
    return view('services/hedge-funds');
});
Route::get('service/trust-service', function () {
    return view('services/trust-service');
});
Route::get('service/merger-acquisition', function () {
    return view('services/merger-acquisition');
});