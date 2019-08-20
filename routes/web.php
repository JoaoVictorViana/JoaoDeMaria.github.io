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

Route::get('/', 'FilmController@Home');

Route::prefix('/list')->group(function(){
    Route::get('/', function(){
        return view('list');
    });
    Route::get('/{type}', function($type){
        return view('list', compact('type'));
    });
});

Route::get('/favorites', function(){
    return view('favorites');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/film/{id}', function($id){
    return $id;
});

Route::get('/type/{nome}', function($type){
    return redirect('/list'.'/'.$type);
});