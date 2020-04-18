<?php
Route::group(['namespace' => 'Benny\Contact\Http\Controllers'], function () {
    Route::get('/contact', 'ContactController@index')->name('contact-us.index');
    Route::post('/contact', 'ContactController@store')->name('contact-us.store');
});
