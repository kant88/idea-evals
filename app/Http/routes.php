<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'WelcomeController@index');
Route::get('confirmName', 'WelcomeController@confirmNameget');
Route::post('confirmName/{id}', 'WelcomeController@confirmNamepost') -> name('confirmNamepost');
//Route::get('confirmEval', 'WelcomeController@confirmEvalget');
Route::post('confirmEval/{id}', 'WelcomeController@confirmEvalpost') -> name('confirmEvalpost');
Route::get('thankyou', function(){
    return view('thankyou');
});
//storeのみ使用
Route::resource('ideas', 'IdeasController');
