<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/projects', [ProjectController::class, 'project']);
Route::get('/resume', [ResumeController::class, 'resume']);
