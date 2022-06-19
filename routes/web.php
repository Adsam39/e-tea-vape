<?php

use Illuminate\Support\Facades\Route;

//INDEX Controller
Route::get('/', 'App\Http\Controllers\IndexC@index');
// Appel méthode index du contrôleur produitC à partir de l'url :
// http://localhost/monprojet/public/

Route::get('menu', 'App\Http\Controllers\IndexC@menu');
Route::get('search', 'App\Http\Controllers\IndexC@search');
Route::get('a_propos', 'App\Http\Controllers\IndexC@about');
Route::get('contact', 'App\Http\Controllers\IndexC@contact');
Route::get('blog', 'App\Http\Controllers\IndexC@blog');
Route::post('result', 'App\Http\Controllers\ProduitC@searchproduct');
Route::get('account', 'App\Http\Controllers\IndexC@person');
Route::post('log', 'App\Http\Controllers\IndexC@account');
