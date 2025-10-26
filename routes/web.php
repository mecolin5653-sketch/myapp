<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

// --------------------
// Students CRUD Routes
// --------------------
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Edit & Update
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');

// Delete
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');


// --------------------
// Sections CRUD Routes
// --------------------
Route::get('/sections', [SectionController::class, 'index'])->name('sections.index');
Route::get('/sections/create', [SectionController::class, 'create'])->name('sections.create');
Route::post('/sections', [SectionController::class, 'store'])->name('sections.store');

// Edit & Update
Route::get('/sections/{section}/edit', [SectionController::class, 'edit'])->name('sections.edit');
Route::put('/sections/{section}', [SectionController::class, 'update'])->name('sections.update');

// Delete
Route::delete('/sections/{section}', [SectionController::class, 'destroy'])->name('sections.destroy');
