<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailorderController;
use App\Http\Controllers\EpicgamesController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\MoontonController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PubgmController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SteamController;
use App\Http\Controllers\SupercellController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\XboxController;
use App\Models\order;
use App\Models\produk;
use Illuminate\Auth\Events\Login;
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

//User
Route::get('/', function () {
    return view('user/index');
});
Route::get('/navbar', function () {
    return view('user/navbar');
});
Route::get('/header', function () {
    return view('user/header');
});
Route::get('/register', function () {
    return view('user/register');
});
Route::get('/footer', function () {
    return view('user/footer');
});
Route::get('/navbaradmin', function () {
    return view('admin/navbar');
});
Route::get('/headeradmin', function () {
    return view('admin/header');
});
Route::get('/footeradmin', function () {
    return view('admin/footer');
});
Route::get('/sidebaradmin', function () {
    return view('admin/sidebar');
});


Route::get('/login', [SessionController::class, 'index']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::post('/sesi/create', [SessionController::class, 'create']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::group(
    ['middleware' => ['auth', 'admin']],
    function () {
        Route::get('/admin', [AdminController::class, 'dashboard']);
        Route::get('admin', [UserController::class, 'jumlah']);

        Route::get('/datauser', [UserController::class, 'user']);
        Route::get('/datauser/create', [UserController::class, 'create']);
        Route::post('/datauser/store', [UserController::class, 'store']);
        Route::get('/datauser/{id}/edit', [UserController::class, 'edit']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::delete('/datauser/{id}', [UserController::class, 'delete']);

        Route::get('/dataproduk', [ProdukController::class, 'produk']);
        Route::get('/dataproduk/create', [ProdukController::class, 'create']);
        Route::post('/dataproduk/store', [ProdukController::class, 'store']);
        Route::get('/dataproduk/{id}/edit', [ProdukController::class, 'edit']);
        Route::put('/dataproduk/{id}', [ProdukController::class, 'update']);
        Route::delete('/dataproduk/{id}', [ProdukController::class, 'delete']);

        Route::get('/datatestimoni', [TestimoniController::class, 'data']);
        Route::delete('/datatestimoni/{id}', [TestimoniController::class, 'delete']);
        Route::get('/datatestimoni/{id}', [TestimoniController::class, 'tampil']);

        Route::get('/datapenjualan', [OrderController::class, 'data']);
        Route::delete('/datapenjualan/{id}', [OrderController::class, 'delete']);
        Route::get('/datapenjualan/{id}', [OrderController::class, 'lunas']);
        Route::get('/datakeuangan', [OrderController::class, 'keuangan']);
    }
);
Route::get('/steam', [SteamController::class, 'produksteam']);
Route::get('/supercell', [SupercellController::class, 'produksupercell']);
Route::get('/xbox', [XboxController::class, 'produkxbox']);
Route::get('/epicgames', [EpicgamesController::class, 'produkepicgames']);
Route::get('/moonton', [MoontonController::class, 'produkmoonton']);
Route::get('/pubgm', [PubgmController::class, 'produkpubgm']);



Route::get('/produk{produk}', [ProdukController::class, 'show'])->name('user.pesan');
Route::get('/order{order}', [OrderController::class, 'order'])->name('transaksi.order');
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::get('/invoice{id}', [OrderController::class, 'invoice'])->name('invoice');
Route::post('/', [TestimoniController::class, 'store']);
Route::get('/testimoni', [TestimoniController::class, 'testimoni']);


Route::get('/cetakinvoice{id}', [InvoiceController::class, 'print'])->name('invoice.cetak');
