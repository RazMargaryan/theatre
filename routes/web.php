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


Route::middleware(['web'])->group(function (){
    Route::get('/', 'TicketsController@index')->name('tickets');
    Route::put('/tickets/{id}', 'TicketsController@update')->name('tickets.update');
});


