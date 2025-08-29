<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

// auth pages
Route::prefix("auth")->group(function () {
    Route::middleware("guest")->group(function () {
        // page routes
        Route::get('/register', [AuthController::class, "showSignUpPage"])->name("auth.sign_up_page");
        Route::get('/login', [AuthController::class, "showLoginPage"])->name("auth.login_page");

        // api routes
        Route::post('/register', [AuthController::class, "signUp"])->name("auth.sign_up");
        Route::post('/login', [AuthController::class, "login"])->name("auth.login");
    });

    Route::middleware("auth")->group(function () {
        Route::get('/logout', [AuthController::class, "logout"])->name("auth.logout");
    });
});

// main pages
Route::middleware("auth")->group(function () {
    Route::prefix("skills")->group(function () {
        // page routes
        Route::get("/", [SkillController::class, "index"])->name("skills.index");

        // api routes
    });

    Route::prefix("profile")->group(function () {
        // page routes
        Route::get("/{id}", [UserController::class, "show"])->name("profile.show");

        // api routes
    });
});
