<?php

use Illuminate\Support\Facades\Route;

Route::namespace('API')->name('api.')->group(function(){
    Route::prefix('developers')->group(function(){

        Route::get('/', 'DeveloperController@index')->name('index_developers');
        Route::get('/{id}', 'DeveloperController@show')->name('single_developers');

        Route::post('/', 'DeveloperController@store')->name('store_developers');
        Route::put('/{id}', 'DeveloperController@update')->name('update_developers');

        Route::delete('/{id}', 'DeveloperController@delete')->name('delete_developers');
    });
});
