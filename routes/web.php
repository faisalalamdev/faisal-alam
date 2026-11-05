<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('services', [HomeController::class, 'services'])->name('services');

Route::get('projects', [HomeController::class, 'projects'])->name('projects');

Route::get('experience', [HomeController::class, 'experience'])->name('experience');

Route::get('projects/{slug}', [HomeController::class, 'projectDetails'])->name('projects.show');

Route::get('blog', [HomeController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [HomeController::class, 'blogDetails'])->name('blog.show');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
