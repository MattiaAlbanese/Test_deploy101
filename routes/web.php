<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

//! ARCHITETTURA MVC -> MODEL VIEW CONTROLLER

// ROTTE PUBLIC
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/contatti', [PublicController::class, 'contacts'])->name('contatti');
Route::post('/contatti/submit', [PublicController::class, 'contactSubmit'])->name('invio.contatto');

//ROTTE STUDENT
Route::get('/chi-siamo/studenti', [StudentController::class, 'index'])->name('studenti');
Route::get('/studente/dettaglio/{id}', [StudentController::class, 'show'])->name('dettaglio.studente');

//ROTTE TEACHER
Route::get('/chi-siamo/docenti', [TeacherController::class, 'index'])->name('docenti');
Route::get('/docente/dettaglio/{id}', [TeacherController::class, 'show'])->name('dettaglio.docente');