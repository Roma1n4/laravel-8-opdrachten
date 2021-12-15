<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TaskController;

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

Route::get('/', [ProjectController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['role:student|teacher|admin']], function () {
    Route::get('admin/projects/{project}/delete', [ProjectController::class, 'delete'])
    ->name('projects.delete');
    Route::get('admin/tasks/{task}/delete', [TaskController::class, 'delete'])
    ->name('tasks.delete');

    Route::resource('/admin/projects', ProjectController::class);

    Route::resource('/admin/tasks', TaskController::class);
});


require __DIR__.'/auth.php';
