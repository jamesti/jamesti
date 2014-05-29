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

//Adicionado para facilitar a comunicação de objetos gatos
Route::model('cat', 'Cat');

Route::get('/', 'HomeController@showWelcome');

//Retornar a Página de Gatos.
//Route::get('cats', function() {
//    return "All cats";
//});

//Retornar Gato pelo seu ID.
//Route::get('cats/{id}', function($id) {
//    return "Cat #$id";
//})->where('id', '[0-9]+');

//redirecionar para a página de gatos!
Route::get('dogs', function() {
    return Redirect::to('cats');
});

//Retornar About de Gatos!
Route::get('cats/about', function() {
    return View::make('cats.about')->with('number_of_cats', 9000);
});

Route::get('cats', function() {
    $cats = Cat::all(); //Pegar todos os Gatos da tabela gatos
    return View::make('cats.index')
                    ->with('cats', $cats);
});

Route::get('cats/create', function() {
    $cat = new Cat;
    return View::make('cats.edit')
                    ->with('cat', $cat)
                    ->with('method', 'post');
});

Route::get('cats/breeds/{name}', function($name) {
    $breed = Breed::whereName($name)->with('cats')->first();
    return View::make('cats.index')
                    ->with('breed', $breed)
                    ->with('cats', $breed->cats);
});

Route::get('cats/{cat}', function(Cat $cat) {
    return View::make('cats.single')
                    ->with('cat', $cat);
});

Route::get('cats/{cat}/edit', function(Cat $cat) {
    return View::make('cats.edit')
                    ->with('cat', $cat)
                    ->with('method', 'put');
});
Route::get('cats/{cat}/delete', function(Cat $cat) {
    return View::make('cats.edit')
                    ->with('cat', $cat)
                    ->with('method', 'delete');
});

Route::post('cats', function() {
    $cat = Cat::create(Input::all());
    return Redirect::to('cats/' . $cat->id)
                    ->with('message', 'Successfully created page!');
});

Route::put('cats/{cat}', function(Cat $cat) {
    $cat->update(Input::all());
    return Redirect::to('cats/' . $cat->id)
                    ->with('message', 'Successfully updated page!');
});

Route::delete('cats/{cat}', function(Cat $cat) {
    $cat->delete();
    return Redirect::to('cats')
                    ->with('message', 'Successfully deleted page!');
});

View::composer('cats.edit', function($view) {
    $breeds = Breed::all();
    if (count($breeds) > 0) {
        $breed_options = array_combine($breeds->lists('id'), $breeds->lists('name'));
    } else {
        $breed_options = array(null, 'Unspecified');
    }
    $view->with('breed_options', $breed_options);
});
