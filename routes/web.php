<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProjectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');
Route::get('/todos/projects', [TodoController::class, 'projects'])->name('todos.projects');
Route::get('/todos/projects/{project}', [TodoController::class, 'showProjectTodos'])->name('todos.projects.show');
Route::get('/todos/{project?}', [TodoController::class, 'index'])->name('todos.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/todos/projects/{project}/create', [TodoController::class, 'create'])->name('todos.create');
Route::post('/todos/projects/', [TodoController::class, 'store'])->name('todos.store');
Route::delete('todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');