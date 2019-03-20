<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/docs', function () {
    return view('index');
});
Route::get('/main', function () {
    return view('main');
});