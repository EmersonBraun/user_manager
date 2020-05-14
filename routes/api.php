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
// routes from User module
Route::group(['as'=>'user.','prefix' =>'user'],function(){
    Route::get('',['as' =>'index','uses'=>'UserController@index']);
    Route::post('',['as' =>'store','uses'=>'UserController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'UserController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'UserController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'UserController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'UserController@restore']); // to restore user, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'UserController@forceDelete']); // to remove user definitely, if use softDelete
});// routes from IP module
Route::group(['as'=>'ip.','prefix' =>'ip'],function(){
    Route::get('',['as' =>'index','uses'=>'IPController@index']);
    Route::post('',['as' =>'store','uses'=>'IPController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'IPController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'IPController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'IPController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'IPController@restore']); // to restore ip, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'IPController@forceDelete']); // to remove ip definitely, if use softDelete
});// routes from Ramal module
Route::group(['as'=>'ramal.','prefix' =>'ramal'],function(){
    Route::get('',['as' =>'index','uses'=>'RamalController@index']);
    Route::post('',['as' =>'store','uses'=>'RamalController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'RamalController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'RamalController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'RamalController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'RamalController@restore']); // to restore ramal, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'RamalController@forceDelete']); // to remove ramal definitely, if use softDelete
});// routes from Sector module
Route::group(['as'=>'sector.','prefix' =>'sector'],function(){
    Route::get('',['as' =>'index','uses'=>'SectorController@index']);
    Route::post('',['as' =>'store','uses'=>'SectorController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'SectorController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'SectorController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'SectorController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'SectorController@restore']); // to restore sector, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'SectorController@forceDelete']); // to remove sector definitely, if use softDelete
});// routes from Graduation module
Route::group(['as'=>'graduation.','prefix' =>'graduation'],function(){
    Route::get('',['as' =>'index','uses'=>'GraduationController@index']);
    Route::post('',['as' =>'store','uses'=>'GraduationController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'GraduationController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'GraduationController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'GraduationController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'GraduationController@restore']); // to restore graduation, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'GraduationController@forceDelete']); // to remove graduation definitely, if use softDelete
});// routes from Group module
Route::group(['as'=>'group.','prefix' =>'group'],function(){
    Route::get('',['as' =>'index','uses'=>'GroupController@index']);
    Route::post('',['as' =>'store','uses'=>'GroupController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'GroupController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'GroupController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'GroupController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'GroupController@restore']); // to restore group, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'GroupController@forceDelete']); // to remove group definitely, if use softDelete
});