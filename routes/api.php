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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// routes from User module
Route::group(['as'=>'user.','prefix' =>'user'],function(){
    Route::get('',['as' =>'index','uses'=>'UserController@index']);
    Route::post('',['as' =>'store','uses'=>'UserController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'UserController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'UserController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'UserController@destroy']);
});// routes from IP module
Route::group(['as'=>'ip.','prefix' =>'ip'],function(){
    Route::get('',['as' =>'index','uses'=>'IPController@index']);
    Route::post('',['as' =>'store','uses'=>'IPController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'IPController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'IPController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'IPController@destroy']);
});// routes from Ramal module
Route::group(['as'=>'ramal.','prefix' =>'ramal'],function(){
    Route::get('',['as' =>'index','uses'=>'RamalController@index']);
    Route::post('',['as' =>'store','uses'=>'RamalController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'RamalController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'RamalController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'RamalController@destroy']);
});// routes from Sector module
Route::group(['as'=>'sector.','prefix' =>'sector'],function(){
    Route::get('',['as' =>'index','uses'=>'SectorController@index']);
    Route::post('',['as' =>'store','uses'=>'SectorController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'SectorController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'SectorController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'SectorController@destroy']);
});// routes from Graduation module
Route::group(['as'=>'graduation.','prefix' =>'graduation'],function(){
    Route::get('',['as' =>'index','uses'=>'GraduationController@index']);
    Route::post('',['as' =>'store','uses'=>'GraduationController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'GraduationController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'GraduationController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'GraduationController@destroy']);
});// routes from Group module
Route::group(['as'=>'group.','prefix' =>'group'],function(){
    Route::get('',['as' =>'index','uses'=>'GroupController@index']);
    Route::post('',['as' =>'store','uses'=>'GroupController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'GroupController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'GroupController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'GroupController@destroy']);
});// routes from Folder module
Route::group(['as'=>'folder.','prefix' =>'folder'],function(){
    Route::get('',['as' =>'index','uses'=>'FolderController@index']);
    Route::post('',['as' =>'store','uses'=>'FolderController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'FolderController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'FolderController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'FolderController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'FolderController@restore']); // to restore folder, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'FolderController@forceDelete']); // to remove folder definitely, if use softDelete
});// routes from Fonetype module
Route::group(['as'=>'fonetype.','prefix' =>'fonetype'],function(){
    Route::get('',['as' =>'index','uses'=>'FonetypeController@index']);
    Route::post('',['as' =>'store','uses'=>'FonetypeController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'FonetypeController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'FonetypeController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'FonetypeController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'FonetypeController@restore']); // to restore fonetype, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'FonetypeController@forceDelete']); // to remove fonetype definitely, if use softDelete
});// routes from Contact module
Route::group(['as'=>'contact.','prefix' =>'contact'],function(){
    Route::get('',['as' =>'index','uses'=>'ContactController@index']);
    Route::post('',['as' =>'store','uses'=>'ContactController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'ContactController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'ContactController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'ContactController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'ContactController@restore']); // to restore contact, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'ContactController@forceDelete']); // to remove contact definitely, if use softDelete
});