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
//les route coté client
Route::get('/', 'ClientController@index')->name('Acceuil');
Route::get('/propos', 'ClientController@propos')->name('Propos');
Route::get('/promo/{vue}', 'ClientController@promoCours')->name('promoCour');
Route::get('/edit/{id}', 'ClientController@edit')->name('edit');

Route::get('/admin', function () {
    return view('admin');
});

Route::resource('Admin/promo', 'PromoController');

//les route pour les comunes
Route::get('comune/{id}', 'ComuneController@commune')->name('comune');
Route::get('comune/byId/{id}', 'ComuneController@communeById')->name('comuneById');
Route::post('/comune/Add', 'ComuneController@addCommune')->name('AddComune');

//les routes pour les comodité
Route::get('comode/{id}', 'ComoditeController@giveComodeNa')->name('comode');
Route::get('comode/{promoId}/{comodId}', 'ComoditeController@deleteComode')->name('comodeDelet');

Route::post('/promo/image/upload', 'ImagesController@fileUpload');
Route::get('promo/image/delete', 'ImagesController@removeUpload');