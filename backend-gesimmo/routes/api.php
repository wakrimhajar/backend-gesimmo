<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function () {
    Route::get('index', 'App\Http\Controllers\AuthController@index');
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::post('addLocP', 'App\Http\Controllers\LocatairePController@addLocP');
    Route::post('addLocM', 'App\Http\Controllers\LocmoController@addLocM');
    Route::post('AddBien', 'App\Http\Controllers\BienController@AddBien');
    Route::post('AddProprietaire', 'App\Http\Controllers\ProprietaireController@AddProprietaire');
    Route::post('AddSociete', 'App\Http\Controllers\SocieteController@AddSociete');
    Route::post('addLocation', 'App\Http\Controllers\LocationController@addLocation');
    Route::post('addFacture', 'App\Http\Controllers\FactureController@addFacture');
    Route::post('addCharge', 'App\Http\Controllers\ChargeController@addCharge');
    Route::post('addPaiement', 'App\Http\Controllers\PaiementController@addPaiement');
    Route::get('getLocPhyActif', 'App\Http\Controllers\LocatairePController@getLocPhyActif');
    Route::get('getLocPhyArchive', 'App\Http\Controllers\LocatairePController@getLocPhyArchive');
    Route::get('getPropPhyActif', 'App\Http\Controllers\ProprietaireController@getPropPhyActif');
    Route::get('getPropPhyArchive', 'App\Http\Controllers\ProprietaireController@getPropPhyArchive');
    Route::get('getBien', 'App\Http\Controllers\BienController@getBien');
    Route::get('getPaiement', 'App\Http\Controllers\PaiementController@getPaiement');
});
