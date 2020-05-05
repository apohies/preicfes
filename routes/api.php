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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuarios','Prueba\PruebaApicontroller@index');


// rutas instituciones
Route::get('/institutions','institutions\institutionsApiController@getAllInstitutions');
Route::get('/institutions/{id}','institutions\institutionsApiController@getInstitution');





Route::get('/schoolgrades','schoolgrades\schoolgradesApiController@getAllSchoolGrades');
Route::get('/areas','areas\AreasApiController@getAllAreas');
Route::get('/questionlevels','questionlevels\QuestionsLevelsApiController@getAllQuestionsLevels');
