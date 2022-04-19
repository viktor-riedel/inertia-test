<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::resource('skills', SkillsController::class)->except(['create', 'show', 'edit']);
Route::resource('projects', ProjectsController::class)->except(['create', 'show', 'edit']);
