<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoplandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Models\Task;

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

Route::get('/', [App\Http\Controllers\PoplandController::class, 'show'])->name('popland');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/admin/home', [TaskController::class, 'index'])->name('admin.home')->middleware('is_admin');

Route::get('/admin/home', [TaskController::class, 'pagination'])->name('admin.home')->middleware('is_admin');

Route::post('/tasks/complete', [TaskController::class, 'markTaskAsCompleted'])->name('mark');

