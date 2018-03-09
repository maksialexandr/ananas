<?php

Route::any('/register-success',  function(){
    return view('auth.register-success');
});

Route::post('post/add', ['as' => 'post.add', 'uses' => 'PostController@add']);
Route::any('/', ['as' => 'home', 'uses' => 'PostController@index']);
Route::auth();

