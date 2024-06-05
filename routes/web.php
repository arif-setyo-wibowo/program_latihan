<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CaborController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\AtletController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\LanggananController;
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

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('landing');
});

Route::controller(FrontController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/course/{id}', 'course')->name('course');
});

Route::controller(LoginController::class)->prefix('admin/login')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/', 'postlogin')->name('postlogin');
});


Route::controller(LoginController::class)->prefix('admin/login')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/', 'postlogin')->name('postlogin');
});

Route::get('/admin/kategorites/{id}', [MateriController::class, 'fetchCategories']);


Route::middleware('petugas')->prefix('/admin')->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.index');
    });


    Route::resource('dashboard', DashboardController::class);

    Route::resource('cabor', CaborController::class);

    Route::resource('kategori', KategoriController::class);

    Route::resource('materi', MateriController::class);

    Route::resource('atlet', AtletController::class);

    Route::resource('langganan', LanggananController::class);

    Route::controller(LoginController::class)->prefix('/logout')->group(function () {
        Route::get('/', 'logout')->name('admin.logout');
    });

    // Route::controller(PetugasController::class)->prefix('/petugas')->group(function () {
    //     Route::get('/', 'index')->name('admin.petugas');
    //     Route::post('/', 'storeUpdate')->name('petugas.store.update');
    //     Route::get('/delete', 'destroy')->name('delete.petugas');
    // });



});

Route::get('/login', function () {
    return view('front/login');
});

Route::get('/forgot', function () {
    return view('front/forgot-password');
});

Route::get('/new', function () {
    return view('front/new-password');
});

Route::get('/landing', function () {
    return view('front/landing');
});

Route::get('/profile', function () {
    return view('front/profile');
});

Route::get('/course', function () {
    return view('front/course');
});

Route::get('/payment', function () {
    return view('front/payment');
});
