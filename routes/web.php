<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/playground', function () {
    return view('playground.index');
});

Route::get('/playground/{s}', function (string $s) {
    abort_unless(preg_match('/^[a-z0-9-]+$/', $s), 404);

    if (view()->exists("playground.{$s}")) {
        return view("playground.{$s}");
    }

    $component = config("daisyui.components.{$s}");

    if ($component && $examples = config("daisyui.example_sets.{$s}")) {
        $component['examples'] = $examples;
    }

    return $component
        ? view('playground.generated', ['meta' => $component])
        : abort(404);
});
