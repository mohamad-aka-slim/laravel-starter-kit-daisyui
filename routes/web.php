<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/playground/{s}', function (string $s) {
    abort_unless(preg_match('/^[a-z0-9-]+$/', $s), 404);

    return view()->exists("playground.{$s}")
        ? view("playground.{$s}")
        : abort(404);
});
