<?php

Route::get('api/beeasy/blog/recent', 'BeEasy\BlogExtension\Controllers\PostsController@recent');
Route::get('api/beeasy/blog/related/{slug}', 'BeEasy\BlogExtension\Controllers\PostsController@related');
