<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home');

Route::get('/projects', function () {
    return view('pages/projects/index');
})->name('projects.index');

Route::get('/projects/show', function () {
    return view('pages/projects/show');
})->name('projects.show');

Route::get('/freelancers/show', function () {
    return view('pages/freelancers/show');
})->name('freelancers.show');

Route::get('/map', function () {
    return view('pages/map');
})->name('map');

Route::get('/login', function () {
    return view('pages/auth/login');
})->name('login');
