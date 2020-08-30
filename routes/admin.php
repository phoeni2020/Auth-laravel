<?php
/**
 * this is admin routes file
 */
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Admin','middleware'=>'guest:admin'],function (){
    Route::get('/login','loginController@showformlogin')->name('login');
    Route::post('/login','loginController@login')->name('login');
});
Route::group(['namespace'=>'Admin','middleware'=>'auth:admin'],function (){
    Route::get('/dashbord',function (){
        return 'Dashbord';
    })->name('dashbord');
    //Route::post('/login','loginController@login')->name('login');
});
