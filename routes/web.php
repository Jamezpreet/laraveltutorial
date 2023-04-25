<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\UserController;

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});

/*****************************************custom coding start**********************************************************/

//normal route example to load a new file pge
    Route::get('/', function(){
        return view('welcome');
    });

// to call a view with diff url's
    //firstfile loads welcome blade
        Route::view('firstfile','welcome');
    //2file loads welcome2 blade
        Route::view('2file','welcome2');

// passing data with url if we add '/2file/{jaspreet}' the it will print and change acc to our requirement 
    Route::get('/2file/{name}', function($name){
        return view('welcome2',['name'=> $name]);
    });

// passing data with url this is constant because name is defined constantly not change if we pass another value in url 
    Route::get('/2file/{name}', function($name){
        return view('welcome2',['name'=> 'constant name ']);
    });

// to call controller and define controller class]
    Route::get('usercontrollerindex/{username}',[UserController::class,'index']);
    Route::get('userloadview/{username}',[UserController::class,'userloadview']);


    // working with form and get data
        Route::post('formdata',[FormController::class,'getData']);
        Route::view('login','FormData/form');
