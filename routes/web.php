<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('form', function () {
    return view('form');
});

Route::get('dasboard', function () {
    return view('template.dasboard');
});

Route::get('dashboard', function () {
    return view('template.dashboard');
});

Route::get('icon', function () {
    return view('template.icon');
});

Route::get('notification', function () {
    return view('template.notification');
});

Route::get('user', function () {
    return view('template.user');
});

Route::get('table', function () {
    return view('template.table');
});

Route::get('typography', function () {
    return view('template.typography');
});
