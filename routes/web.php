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

//Pavienis kelias
Route::get('/', function () {
    return view('welcome');
  });
  
  //Objektų klasė Clients
  Route::prefix('clients')->group(function() {
  
    //Index. /clients
    Route::get('', 'App\Http\Controllers\ClientController@index')->name('client.index');
    
    //Create
    Route::get('create', 'App\Http\Controllers\ClientController@create')->name('client.create');
    Route::post('store', 'App\Http\Controllers\ClientController@store' )->name('client.store');
    
    // Edit form, id
    Route::get('edit/{client}', 'App\Http\Controllers\ClientController@edit')->name('client.edit');
    Route::post('update/{client}', 'App\Http\Controllers\ClientController@update')->name('client.update');
    
    //Delete
    Route::post('destroy/{client}', 'App\Http\Controllers\ClientController@destroy' )->name('client.destroy');
    
    //Show
    Route::get('show/{client}', 'App\Http\Controllers\ClientController@show')->name('client.show');

  });

    //Objektų klasė Companies
    Route::prefix('companies')->group(function() {
  
        //Index. /companies
        Route::get('', 'App\Http\Controllers\CompanyController@index')->name('company.index');
        
        //Create
        Route::get('create', 'App\Http\Controllers\CompanyController@create')->name('company.create');
        Route::post('store', 'App\Http\Controllers\CompanyController@store' )->name('company.store');
        
        // Edit form, id
        Route::get('edit/{company}', 'App\Http\Controllers\CompanyController@edit')->name('company.edit');
        Route::post('update/{company}', 'App\Http\Controllers\CompanyController@update')->name('company.update');
        
        //Delete
        Route::post('destroy/{company}', 'App\Http\Controllers\CompanyController@destroy' )->name('company.destroy');
        
        //Show
        Route::get('show/{company}', 'App\Http\Controllers\CompanyController@show')->name('company.show');

    });
