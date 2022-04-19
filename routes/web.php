<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'skills' => App\Models\Skill::all(),
        'projects' => App\Models\Project::all()
    ]);
});


Route::post('/contact', [ContactController::class, 'contact'])->name('contact');
