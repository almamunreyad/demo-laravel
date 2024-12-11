<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$500000',
            ],
            [
                'id' => 2,
                'title' => 'Web Developer',
                'salary' => '$100000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$400000',
            ],
        ]
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});
