<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index-3');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::get('/{page}', function ($page) {
        $viewName = 'admin.' . str_replace('.html', '', $page);
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    });
});

Route::get('/{page}', function ($page) {
    $viewName = 'frontend.' . str_replace('.html', '', $page);
    if (view()->exists($viewName)) {
        return view($viewName);
    }
    abort(404);
});
