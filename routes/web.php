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

Route::get('/biriyanis', function () {
    $biriyanis = [
        ['name' => 'Kacchi', 'price' => 650, 'customer_review' => 'Very Good'],
        ['name' => 'Chicken', 'price' => 450, 'customer_review' => 'Good'],
        ['name' => 'Beef', 'price' => 550, 'customer_review' => 'Good'],
    ];

    return view('biriyanis', ['biriyanis' => $biriyanis]);
});
