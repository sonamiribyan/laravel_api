<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::namespace('Api')->group(function () {
    Route::resource('posts', 'Post\PostController');
});
