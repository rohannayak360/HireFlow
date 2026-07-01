<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/HireFlow/login', function () {
    return view('frontend.login');
})->name('login');

Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/HireFlow/register', function () {
    return view('frontend.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('frontend.forgot-password');
});

Route::get('/HireFlow/forgot-password', function () {
    return view('frontend.forgot-password');
})->name('password.request');

Route::get('/reset-password/{token?}', function () {
    return view('frontend.reset-password');
});

Route::get('/HireFlow/reset-password/{token?}', function () {
    return view('frontend.reset-password');
})->name('password.reset');

Route::get('/verify-email', function () {
    return view('frontend.verify-email');
});

Route::get('/HireFlow/verify-email', function () {
    return view('frontend.verify-email');
})->name('verification.notice');

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
