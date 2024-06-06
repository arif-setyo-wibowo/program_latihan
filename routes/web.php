<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CaborController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\AtletController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\Front\PaymentController;
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

Route::controller(PaymentController::class)->group(function () {
    Route::get('/payment', 'index')->name('payment');
    Route::get('/payment/{id}', 'show')->name('payment.show');
    Route::post('/payment-store', 'store')->name('payment.store');
});


Route::controller(LoginController::class)->prefix('login')->group(function () {
    Route::get('/', 'loginFront')->name('login.front');
    Route::post('/', 'postloginfront')->name('post.login.front');
    Route::get('/logout-front', 'logout_front')->name('logout.front');
});

Route::controller(LoginController::class)->prefix('admin/login')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/', 'postlogin')->name('postlogin');
});



Route::get('/admin/kategorites/{id}', [MateriController::class, 'fetchCategories']);


Route::middleware('atlet')->group(function () {
    Route::controller(FrontController::class)->group(function () {
        Route::get('/home', 'home')->name('home');
        Route::get('/course/{id}', 'course')->name('course');
        Route::get('/profile', 'profil')->name('profil');
    });
});


Route::middleware('pelatih')->prefix('pelatih/')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.index.pelatih');
    });

    Route::resource('kategori', KategoriController::class);
    Route::resource('materi', MateriController::class);

    Route::controller(LoginController::class)->prefix('/logout')->group(function () {
        Route::get('/', 'logout_pelatih')->name('admin.logout.pelatih');
    });
});

Route::middleware('petugas')->prefix('/admin')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.index');
    });

    Route::resource('dashboard', DashboardController::class);
    Route::resource('cabor', CaborController::class);
    Route::resource('atlet', AtletController::class);

    Route::controller(AtletController::class)->group(function () {
        Route::get('atlet/{atlet}/update/{action}', 'update')->name('atlet.update.custom');
    });

    Route::resource('pembelian', PembelianController::class);
    Route::resource('langganan', LanggananController::class);

    Route::controller(LoginController::class)->prefix('/logout')->group(function () {
        Route::get('/', 'logout')->name('admin.logout');
    });

    Route::resource('petugas', PetugasController::class);
});


Route::get('/forgot', function () {
    return view('front/forgot-password');
});

Route::get('/new', function () {
    return view('front/new-password');
});


