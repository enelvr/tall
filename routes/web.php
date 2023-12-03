<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Projects\{IndexProjects, CreateProject, ShowProject, EditProject};
use App\Livewire\Pages\Home\{IndexHome};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', IndexHome::class)->name('home.index');

Route::get('/projects', IndexProjects::class)->name('projects.index');
Route::get('/projects/create', CreateProject::class)->name('projects.create');
Route::get('/projects/{id}', ShowProject::class)->name('projects.show');
Route::get('/projects/{id}/edit', EditProject::class)->name('projects.edit');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
