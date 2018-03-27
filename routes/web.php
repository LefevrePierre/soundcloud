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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/','MonControlleur@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/formulairechanson','MonControlleur@formulairechanson');

Route::get('/ajouter', 'HomeController@formimport');

Route::get('/recherche/{s}', 'MonControlleur@recherche');

Route::get('/supprimerChanson/{id}', 'MonControlleur@supprimerChanson');

Route::get('/supprimerPlaylist/{id}', 'MonControlleur@supprimerPlaylist');

Route::post('/creerchanson', 'MonControlleur@creerchanson');

Route::get('/utilisateur/{id}', 'MonControlleur@utilisateur')->where('id', '[0-9]+');

Route::get('/musiques', 'HomeControlleur@musiques');

Route::get('/changerSuivi/{id}', 'MonControlleur@changerSuivi')->where('id','[0-9]+')->middleware('auth');

Route::get('/playlists', 'MonControlleur@playlists');


Route::get('/playlist/{id}', 'MonControlleur@playlist')->where('id', '[0-9]+');

Route::post('/creerPlaylist', 'MonControlleur@creerPlaylist');

Route::post('/playlistAjout/{idP}/{idM}', 'MonControlleur@playlistAjout')->where('idM', '[0-9]+')->where('idP', '[0-9]+');

Route::post('/musique', 'MonControlleur@ajoutPlaylist');

Route::get('/testAjax', 'MonControlleur@testAjax');