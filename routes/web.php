<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailorderController;
use App\Http\Controllers\EpicgamesController;
use App\Http\Controllers\MoontonController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PubgmController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SteamController;
use App\Http\Controllers\SupercellController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\XboxController;
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
// Route::get('/login', function () {
//     return view('user/login');
// });
Route::get('/footer', function () {
    return view('user/footer');
});
Route::get('/produkcategories', function () {
    return view('user/produkcategories');
});
Route::get('/pesan', function () {
    return view('user/pesan');
});
Route::get('/steam', function () {
    return view('user/steam');
});
Route::get('/supercell', function () {
    return view('user/supercell');
});
Route::get('/xbox', function () {
    return view('user/xbox');
});
Route::get('/epicgames', function () {
    return view('user/epicgames');
});
Route::get('/pubgm', function () {
    return view('user/pubgm');
});
Route::get('/moonton', function () {
    return view('user/moonton');
});
Route::get('/trusted', function () {
    return view('user/trustedboard');
});

//admin
Route::get('/admin', function () {
    return view('admin/admin');
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
Route::get('/datauser', function () {
    return view('admin/menu/datauser');
});
Route::get('/dataproduk', function () {
    return view('admin/menu/dataproduk');
});
Route::get('/datapenjualan', function () {
    return view('admin/menu/datapenjualan');
});
Route::get('/datakeuangan', function () {
    return view('admin/menu/datakeuangan');
});





// Route::get('/detailorder', function () {
//     return view('transaksi/detailorder');
// });

Route::get('/login', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::post('/sesi/create', [SessionController::class, 'create']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::group(
    ['middleware' => ['auth', 'admin']],
    function () {
        Route::get('/admin/admin', [AdminController::class, 'dashboard']);
    }
);

Route::get('/steam', [SteamController::class, 'produksteam']);
Route::get('/supercell', [SupercellController::class, 'produksupercell']);
Route::get('/xbox', [XboxController::class, 'produkxbox']);
Route::get('/epicgames', [EpicgamesController::class, 'produkepicgames']);
Route::get('/moonton', [MoontonController::class, 'produkmoonton']);
Route::get('/pubgm', [PubgmController::class, 'produkpubgm']);

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

Route::get('/produk{produk}', [ProdukController::class, 'show'])->name('user.pesan');
Route::get('/order{order}', [OrderController::class, 'order'])->name('transaksi.order');
// Route::get('/detailorder{detailorder}', [DetailorderController::class, 'detailorder'])->name('transaksi.detailorder');
Route::post('/checkout', [OrderController::class, 'checkout']);
