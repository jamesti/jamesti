<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', 'HomeController@showWelcome');

//Retornar a Página de Gatos.
Route::get('cats', function() {
    return "All cats";
});

//Retornar Gato pelo seu ID.
Route::get('cats/{id}', function($id) {
    return "Cat #$id";
})->where('id', '[0-9]+');

//redirecionar para a página de gatos!
Route::get('dogs', function() {
    return Redirect::to('cats');
});

//Retornar About de Gatos!
Route::get('cats/about', function() {
    return View::make('cats/about')->with('number_of_cats', 9000);
});
