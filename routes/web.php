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


Auth::routes();

/** todo incomplete
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/home', function () { return redirect('/dashboard'); });
*/

/** guest views **/
Route::get('/', function () {
    return view('explore');
});

Route::get('/explore', function () {
    return view('explore');
});

Route::post('/explore',
    'App\Http\Controllers\ExploreController@search')
    ->name('explore.search');

Route::get('/recipes/user/{id}', 'App\Http\Controllers\ExploreController@searchByUser');

/** PRODUCTS **/
Route::get('/products', 
    'App\Http\Controllers\ProductController@index')
    ->name('products');

Route::get('/products/create/', 
    'App\Http\Controllers\ProductController@create')
    ->name('products.create');

Route::get('/products/store', 
    'App\Http\Controllers\ProductController@store')
    ->name('products.store');

Route::get('/products/show/{id}', 
    'App\Http\Controllers\ProductController@show')
    ->name('products.show');

Route::get('/products/edit/{id}', 
    'App\Http\Controllers\ProductController@edit')
    ->name('products.edit');

Route::get('/products/update/{id}', 
    'App\Http\Controllers\ProductController@update')
    ->name('products.update');

Route::get('/products/destroy/{id}', 
    'App\Http\Controllers\ProductController@destroy')
    ->name('products.destroy');


/** RECIPES **/
Route::get('/recipes', 
    'App\Http\Controllers\RecipeController@index')
    ->name('recipes');

Route::get('/recipes/create', 
    'App\Http\Controllers\RecipeController@create')
    ->name('recipes.create');

Route::get('/recipes/show/{id}', 
    'App\Http\Controllers\RecipeController@show')
    ->name('recipes.show');

Route::post('/recipes/show/{id}/rate',
    'App\Http\Controllers\RecipeController@rate')
    ->name('recipes.rate');

Route::post('/recipes/show/{id}/comment',
    'App\Http\Controllers\RecipeController@comment')
    ->name('recipes.comment');

Route::get('/recipes/edit/{id}', 
    'App\Http\Controllers\RecipeController@edit')
    ->name('recipes.edit');

Route::get('/recipes/store', 
    'App\Http\Controllers\RecipeController@store')
    ->name('recipes.store');

Route::get('/recipes/update/{id}', 
    'App\Http\Controllers\RecipeController@update')
    ->name('recipes.update');

Route::get('/recipes/destroy/{id}', 
    'App\Http\Controllers\RecipeController@destroy')
    ->name('recipes.destroy');
