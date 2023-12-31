<?php

use App\Http\Controllers\MajorController;
use App\Http\Controllers\DoctorController;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('doctor', DoctorController::class);
Route::get('/majors', [UserController::class, 'index']);
Route::get('/majors', [MajorController::class, 'index'])->name('major.index');
Route::put('/majors/{id}', [MajorController::class, 'update'])->name('major.update');
Route::get('/majors/{id}/edit', [MajorController::class, 'edit'])->name('major.edit');
Route::get('/majors/{major}', [MajorController::class, 'show'])->name('major.show');
Route::get('/major/create', [MajorController::class, 'create'])->name('major.create');
Route::post('/majors', [MajorController::class, 'store'])->name('major.store');

Route::delete('/majors/{id}', [MajorController::class, 'destroy'])->name('major.delete');

// create -> post
// update -> put
// delete -> delete