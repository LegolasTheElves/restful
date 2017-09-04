<?php
Route::group(['prefix' => 'api/v1'], function(){
    //meetings route
    Route::resource('meeting', 'MeetingController', [
   'except' => ['edit', 'create'] 
    ]);
    //registration meeting route
    Route::resource('meeting/registration', 'RegistrationController', [
       'only' => ['store', 'destroy'] 
    ]);
    //create user account
    Route::post('user', [
        'uses' => 'AuthController@store'
    ]);
    //signin user account
    Route::post('user/signin', [
        'uses' => 'AuthController@signin'
    ]);
});
