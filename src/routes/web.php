<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Sasoibal\Crud\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('/crud/index', 'CrudController@index')->name('crud.index');
    Route::get('/crud/create', 'CrudController@create')->name('crud.create');
    Route::post('/crud/store', 'CrudController@store')->name('crud.store');

    Route::get('/crud/edit/{id}', 'CrudController@edit')->name('crud.edit');
    Route::post('/crud/update/{id}', 'CrudController@update')->name('crud.update');
    Route::get('/crud/delete/{id}', 'CrudController@delete')->name('crud.delete');
});

