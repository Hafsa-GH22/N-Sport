<?php

use App\Models\Category;
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

// --- Affichage des catégories dans toutes les pages --- //
View::composer('front', function ($view)
{
	$categories = Category::all();

	$view->with('categories', $categories);
});

Route::get('/', 'App\Http\Controllers\ArticleController@home');

Route::get('/detail/{id}', 'App\Http\Controllers\ArticleController@articleDetail');

Route::get('/category/{name}', 'App\Http\Controllers\CategoryController@categoryPage');