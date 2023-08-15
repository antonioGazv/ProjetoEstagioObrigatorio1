<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
use App\Models\Horario;

// Rota do Usuario

Route::get('/', function () {
    return view('Inicio/welcome');
})->name('menu');

Route::get('User', [\App\Http\Controllers\UsuarioController::class, 'index'])->name('userIndex');
Route::get('User/create', [\App\Http\Controllers\UsuarioController::class, 'create'])->name('userCreate');
Route::post('User', [\App\Http\Controllers\UsuarioController::class, 'store'])->name('userStore');
Route::get('User/{id}/edit', [\App\Http\Controllers\UsuarioController::class, 'edit'])->where('id', '[0-9]+')->name('userEdit');
Route::put('user/{id}', [\App\Http\Controllers\UsuarioController::class, 'update'])->where('id', '[0-9]+')->name('userUpdate');
Route::delete('user/{id}', [\App\Http\Controllers\UsuarioController::class, 'destroy'])->where('id', '[0-9]+')->name('userDestroy');

Route::get('horario', [\App\Http\Controllers\HorarioController::class, 'index'])->name('horarioIndex');
Route::get('horario/create', [\App\Http\Controllers\HorarioController::class, 'create'])->name('horarioCreate');
Route::post('horario', [\App\Http\Controllers\HorarioController::class, 'store'])->name('horarioStore');
Route::get('horario/{id}/edit', [\App\Http\Controllers\HorarioController::class, 'edit'])->where('id', '[0-9]+')->name('horarioEdit');
Route::put('horario/{id}', [\App\Http\Controllers\HorarioController::class, 'update'])->where('id', '[0-9]+')->name('horarioUpdate');
Route::delete('horario/{id}', [\App\Http\Controllers\HorarioController::class, 'destroy'])->where('id', '[0-9]+')->name('horarioDestroy');

Route::get('Sala', [\App\Http\Controllers\SaladeAulaController::class, 'index'])->name('salaIndex');
Route::get('Sala/create', [\App\Http\Controllers\SaladeAulaController::class, 'create'])->name('salaCreate');
Route::post('Sala', [\App\Http\Controllers\SaladeAulaController::class, 'store'])->name('salaStore');
Route::get('Sala/{id}/edit', [\App\Http\Controllers\SaladeAulaController::class, 'edit'])->where('id', '[0-9]+')->name('salaEdit');
Route::put('Sala/{id}', [\App\Http\Controllers\SaladeAulaController::class, 'update'])->where('id', '[0-9]+')->name('salaUpdate');
Route::delete('sala/{id}', [\App\Http\Controllers\SaladeAulaController::class, 'destroy'])->where('id', '[0-9]+')->name('salaDestroy');

Route::get('Professor', [\App\Http\Controllers\ProfessorController::class, 'index'])->name('professorIndex');
Route::get('Professor/create', [\App\Http\Controllers\ProfessorController::class, 'create'])->name('professorCreate');
Route::post('Professor', [\App\Http\Controllers\ProfessorController::class, 'store'])->name('professorStore');
Route::get('Professor/{id}/edit', [\App\Http\Controllers\ProfessorController::class, 'edit'])->where('id', '[0-9]+')->name('professorEdit');
Route::put('professor/{id}', [\App\Http\Controllers\ProfessorController::class, 'update'])->where('id', '[0-9]+')->name('professorUpdate');
Route::delete('professor/{id}', [\App\Http\Controllers\ProfessorController::class, 'destroy'])->where('id', '[0-9]+')->name('professorDestroy');

Route::get('UC', [\App\Http\Controllers\UCController::class, 'index'])->name('UCIndex');
Route::get('UC/create', [\App\Http\Controllers\UCController::class, 'create'])->name('UCCreate');
Route::post('UC', [\App\Http\Controllers\UCController::class, 'store'])->name('UCStore');
Route::get('UC/{id}/edit', [\App\Http\Controllers\UCController::class, 'edit'])->where('id', '[0-9]+')->name('UCEdit');
Route::put('UC/{id}', [\App\Http\Controllers\UCController::class, 'update'])->where('id', '[0-9]+')->name('UCUpdate');
Route::delete('UC/{id}', [\App\Http\Controllers\UCController::class, 'destroy'])->where('id', '[0-9]+')->name('UCDestroy');

Route::get('ensalamento', [\App\Http\Controllers\EnsalamentoController::class, 'mostrarEnsalamento'])->name('ensalamentoIndex');
Route::get('ensalamento/create', [\App\Http\Controllers\EnsalamentoController::class, 'criar'])->name('ensalamentoCreate');
Route::post('ensalamento', [\App\Http\Controllers\EnsalamentoController::class, 'store'])->name('ensalamentoStore');
Route::get('ensalamento/{id}/edit', [\App\Http\Controllers\EnsalamentoController::class, 'editar'])->where('id', '[0-9]+')->name('ensalamentoEdit');
Route::put('ensalamento/{id}', [\App\Http\Controllers\EnsalamentoController::class, 'update'])->where('id', '[0-9]+')->name('ensalamentoUpdate');
Route::delete('ensalamento/{id}', [\App\Http\Controllers\EnsalamentoController::class, 'destroy'])->where('id', '[0-9]+')->name('ensalamentoDestroy');
Route::get('ensalamento/gerar', [\App\Http\Controllers\EnsalamentoController::class, 'gerar'])->name('ensalamentoGerar');
