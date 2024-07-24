<?php


use Illuminate\Support\Facades\Route;

Route::prefix('/admin/')->name('admin.')
->group(function(){
    Route::view('index','admin.index')->name('index');

});