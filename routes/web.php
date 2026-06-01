<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/projects', 'projects');

Route::get('/projects/simpeg', function () {
    return view('projects.simpeg');
});

Route::get('/projects/writing', function () {
    return view('projects.writing');
});

Route::get('/projects/portfolio', function () {
    return view('projects.portfolio');
});

Route::get('/projects/student-grade', function () {
    return view('projects.student-grade');
});

Route::get('/projects/food-ordering', function () {
    return view('projects.food-ordering');
});

Route::get('/projects/coffee-sales', function () {
    return view('projects.coffee-sales');
});

Route::get('/projects/solar-system', function () {
    return view('projects.solar-system');
});

Route::get('/projects/fish-animation', function () {
    return view('projects.fish-animation');
});

Route::get('/creative', function () {
    return view('creative');
});

Route::get('/certificates/featured', function () {
    return view('certificates.featured');
});

Route::get('/certificates/writing', function () {
    return view('certificates.writing');
});

Route::get('/certificates/webinar', function () {
    return view('certificates.webinar');
});

Route::get('/certificates/training', function () {
    return view('certificates.training');
});

Route::get('/projects/cloud-web-security', function () {
    return view('projects.cloud-web-security');
});