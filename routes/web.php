<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    toastr()->success('hello, this is the begining........');
    return view('welcome');
});
