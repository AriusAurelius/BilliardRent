<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booktable', function () {
    return view('booktable');
});

Route::get('auth/loginadmin', function () {
    return view('auth.loginadmin');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('admin/booking', function () {
    return view('admin.booking');
});

Route::get('admin/history', function () {
    return view('admin.history');
});