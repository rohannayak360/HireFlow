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

// Candidate Routes
Route::prefix('candidate')->name('candidate.')->group(function () {
    Route::get('/dashboard', function () {
        return view('frontend.candidate.dashboard');
    })->name('dashboard');
});

// HireFlow Prefixed Routes for local Laragon environment
Route::prefix('HireFlow/candidate')->name('hireflow.candidate.')->group(function () {
    Route::get('/dashboard', function () {
        return view('frontend.candidate.dashboard');
    })->name('dashboard');
});

// Dashboard routes (Temporary, without auth middleware for now)
$dashboardRoutes = function () {
    Route::get('/', function () {
        return view('frontend.candidate.dashboard');
    })->name('dashboard');
    
    Route::get('/profile', function () {
        return view('frontend.candidate.profile');
    })->name('profile');
    
    // Placeholder routes for sidebar
    Route::get('/resume', function() {
        return view('frontend.candidate.resume');
    })->name('resume');
    Route::get('/applied', function() {
        return view('frontend.candidate.applied-jobs');
    })->name('applied');
    Route::get('/saved', function() {
        return view('frontend.candidate.saved-jobs');
    })->name('saved');
    Route::get('/notifications', function() { return "Notifications Page"; })->name('notifications');
    Route::get('/settings', function() { return "Settings Page"; })->name('settings');
};

// Map routes for both artisan serve and Laragon apache
Route::prefix('dashboard')->name('candidate.')->group($dashboardRoutes);
Route::prefix('HireFlow/dashboard')->name('hireflow.candidate.')->group($dashboardRoutes);

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
