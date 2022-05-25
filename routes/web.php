<?php

use Illuminate\Support\Facades\Route;

//INDEX Controller
Route::get('/', 'App\Http\Controllers\IndexC@index');
// Appel méthode index du contrôleur produitC à partir de l'url :
// http://localhost/monprojet/public/

Route::get('/menu', 'App\Http\Controllers\IndexC@menu');
Route::get('/search', 'App\Http\Controllers\IndexC@search');
Route::get('/a_propos', 'App\Http\Controllers\IndexC@about');
Route::get('/contact', 'App\Http\Controllers\IndexC@contact');
Route::get('/blog', 'App\Http\Controllers\IndexC@blog');

//PRODUIT Controller
Route::get('produit/consulter', 'App\Http\Controllers\ProduitC@all'); 
// Appel méthode all du contrôleur produitC à partir de l'url 
// http://localhost/monprojet/public/produit/consulter

Route::get('produit/ajouter', 'App\Http\Controllers\ProduitC@newp');  
// Appel méthode newp du contrôleur produitC à partir de l'url
// http://localhost/monprojet/public/produit/ajouter

//Route::post('produit/ajoutersave', 'App\Http\Controllers\ProduitC@newsave');  
// Appel méthode newsave du contrôleur à partir de l'url 
//  Traitement des données du form de saisie d'un nouveau produit

Route::post('produit/ajoutersave', 'App\Http\Controllers\ProduitC@newsave');  
// Appel méthode newsave du contrôleur à partir de l'url 
//  Traitement des données du form de saisie d'un nouveau produit

Route::get('liquide/ajouter', 'App\Http\Controllers\LiquideC@newliquide');  

Route::post('liquide/ajoutersave', 'App\Http\Controllers\LiquideC@newsaveliquide');

//Route::get('/connexion', 'App\Http\Controllers\ConnexionC@signin');

//Route::get('/inscription', 'App\Http\Controllers\ConnexionC@signup');
