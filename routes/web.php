<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CaborController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;

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

Route::controller(LoginController::class)->prefix('admin/login')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/', 'postlogin')->name('postlogin');
});
Route::get('/admin/kategorites/{id}', [MateriController::class, 'fetchCategories']);


Route::middleware('petugas')->prefix('/admin')->group(function () {

    Route::resource('dashboard', DashboardController::class);

    Route::resource('cabor', CaborController::class);

    Route::resource('kategori', KategoriController::class);

    Route::resource('materi', MateriController::class);





});
