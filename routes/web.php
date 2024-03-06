<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProff;

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

Route::get('/',[ControllerProff::class, 'login'])->name('usuario.login');

Route::get('admin/entrar', [ControllerProff::class, 'entrar'])->name('admin.entrar');

Route::get('/principal',[ControllerProff::class, 'admin'])->name('principal.admin');

Route::get('cadastrar/prof',[ControllerProff::class, 'cadastrar_prof'])->name('cadastrar.prof');

Route::get('cadastrar/formacao_prof',[ControllerProff::class, 'formacao_p'])->name('formacao.prof');

Route::get('cadastrar/disicipilna_curso',[ControllerProff::class, 'disicipilna_curso'])->name('disicipilna.curso');

Route::get('cadastrar/estudante',[ControllerProff::class, 'cadstrar_estudante'])->name('cadastrar.estudantes');

Route::get('inscrever/estudante',[ControllerProff::class, 'inscrever_estudante'])->name('inscrever.estudante');

Route::get('cadastrar/disciplina',[ControllerProff::class, 'cadastrar_disciplina'])->name('cadastrar.disciplina');

Route::get('ver/disciplina',[ControllerProff::class, 'disciplina'])->name('ver.disciplina');

Route::get('ver/turma',[ControllerProff::class, 'turma'])->name('ver.turma');

Route::get('cadastrar/turma',[ControllerProff::class, 'turma_cadastrar'])->name('cadastrar.turma');

Route::get('ver/curso',[ControllerProff::class, 'ver_curso'])->name('ver.curso');

Route::get('cadastrar/curso',[ControllerProff::class, 'cadastrar_curso'])->name('cadastrar.curso');
