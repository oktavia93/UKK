<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataprodukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\ReadController;
use App\Models\Produks;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('peternakan');
});

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/service', [HomeController::class, 'service'])->name('service');

Route::get('/produk', [HomeController::class, 'produk'])->name('produk');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'loginUser'])->name('login.post');

Route::get('/dataproduk', [DataprodukController::class, 'index'])->name('admin.dataproduk');

Route::post('/dataproduk', [DataprodukController::class, 'store'])->name('tambah.produk');

Route::get('/createproduk', [DataprodukController::class, 'create'])->name('admin.createproduk');

Route::get('/sahiwal', [HomeController::class, 'sahiwal'])->name('sahiwal');

Route::get('/Sindhi', [HomeController::class, 'Sindhi'])->name('Sindhi');

Route::get('/grati', [HomeController::class, 'grati'])->name('grati');

Route::get('/products', [ProduksController::class, 'index'])->name('CRUD.index');

Route::post('/create', [ProduksController::class, 'create'])->name('create');

Route::get('/read', [ReadController::class, 'read'])->name('CRUD.read');

Route::get('/produks/{id}', 'UserController@show');

// Route::get('/viewcreate',[ProduksController::class,'viewcreate'])->name('viewcreate');
// Route::get('admin-dashboard', [AdminController::class, 'index'])->name ('admin.dashboard');
