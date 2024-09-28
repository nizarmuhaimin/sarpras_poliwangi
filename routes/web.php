<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Owner\ReviewController;
use App\Http\Controllers\Owner\AddController;
use App\Http\Controllers\Owner\DeleteController;
use App\Http\Controllers\Owner\EditController;
use App\Http\Controllers\Owner\ListController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Owner\TransactionController;
use App\Http\Controllers\Owner\PersetujuanController; //ini
use App\Http\Controllers\Owner\KelolaController;
use App\Http\Controllers\User\PengembalianController;
use App\Http\Controllers\Owner\SaranaController;


use App\Http\Controllers\User\KendaraanController;
use App\Http\Controllers\User\PrasaranaController;
use App\Http\Controllers\User\MobilController;
use App\Http\Controllers\User\SewaController;
use App\Http\Controllers\User\PeminjamanController;


use App\Http\Controllers\User\UserReviewController;
use Illuminate\Support\Facades\Auth as Auth;

use function PHPSTORM_META\type;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.admin_master');
//     })->name('dashboard');
// });

Route::get('/', [HomeController::class, 'checkUserType']);
    
Route::get('/admin/dashboard',function(){
    return view('admin.admin_master');
})->name('admin.dashboard');

Route::prefix('owner')->group(function () {
    Route::get('/dashboard', [OwnerController::class, 'index'])->name('owner.dashboard');
    Route::get('/persetujuan', [persetujuanController::class, 'persetujuanPeminjaman'])->name('owner.peminjaman'); //ik inggar
    Route::get('/delete/{id}', [DeleteController::class, 'mobilDelete'])->name('owner.mobil_delete');
    Route::get('/add', [AddController::class, 'add'])->name('owner.add');
    Route::get('/list', [ListController::class, 'list'])->name('owner.list');
    Route::get('/review', [ReviewController::class, 'review'])->name('owner.review_mobil');
    Route::get('/edit/{id}', [EditController::class, 'mobilEdit'])->name('owner.edit_mobil');
    Route::post('/update/{id}', [EditController::class, 'mobilUpdate'])->name('owner.update_mobil');
    Route::post('/store', [AddController::class, 'mobilStore'])->name('owner.mobilStore');
    Route::get('/transaksi/list', [TransactionController::class, 'listTransaksi'])->name('transaksi.list');
    Route::get('/transaksi/listUpdate/{id}', [TransactionController::class, 'listUpdate'])->name('transaksi.listUpdate');
    Route::get('/transaksi/listDenied/{id}', [TransactionController::class, 'listDenied'])->name('transaksi.listDenied');
    Route::get('/transaksi/proses', [TransactionController::class, 'prosesTransaksi'])->name('transaksi.proses');
    Route::get('/transaksi/proses/selesai/{id}', [TransactionController::class, 'prosesSelesai'])->name('transaksi.proses.selesai');
    Route::get('/transaksi/selesai', [TransactionController::class, 'selesaiTransaksi'])->name('transaksi.selesai');
    Route::get('/kelola_data', [KelolaController::class, 'kelolaData'])->name('owner.kelola_data');
    Route::get('/kelola_data/sarana', [KelolaController::class, 'tambahSarana'])->name('owner.tambah_sarana');
    Route::post('/kelola_data/sarana/create', [SaranaController::class, 'saranaStore'])->name('owner.saranaStore');
    Route::get('/kelola_data/prasarana', [KelolaController::class, 'tambahPrasarana'])->name('owner.tambah_prasarana');
    Route::get('/kelola_data/kendaraan', [KelolaController::class, 'tambahKendaraan'])->name('owner.tambah_kendaraan_dinas');
    Route::post('/kelola_data/form/create', [KelolaController::class, 'kelolaCreate'])->name('owner.kelola_create');
});
    

Route::get('/user/home',function(){
    return view('user.homepage');
})->name('user.home');

Route::prefix('user')->group(function () {
    Route::get('/home', [MobilController::class, 'viewMobil'])->name('user.home');
    Route::get('/kendaraan', [KendaraanController::class, 'viewKendaraan'])->name('user.kendaraan');
    Route::get('/sarana', [SaranaController::class, 'viewSarana'])->name('user.sarana');
    Route::get('/detail_sarana', [SaranaController::class, 'detailSarana'])->name('user.detail_sarana');
    Route::get('/pengembalian_sarana', [SaranaController::class, 'pengembalianSarana'])->name('user.pengembalian_sarana');
    Route::post('/pengembalian_sarana/create', [PengembalianController::class, 'pengembalianSarpras'])->name('user.pengembalian_create');
    //Route::get('/pengembalian_prasarana', [PrasaranaController::class, 'pengembalianPrasarana'])->name('user.pengembalian_prasarana');
    Route::get('/pengembalian_kendaraan', [KendaraanController::class, 'pengembalianKendaraan'])->name('user.pengembalian_kendaraan');
    Route::post('/pengembalian_kendaraan/create', [PengembalianController::class, 'pengembalianKendaraan'])->name('user.dikembalikan_create');
    Route::get('/peminjaman_sarana', [SaranaController::class, 'peminjamanSarana'])->name('user.peminjaman_sarana');
    Route::post('/peminjaman_sarana/create', [PeminjamanController::class, 'pinjamSarpras'])->name('user.peminjaman_create');
    //Route::get('/peminjaman_prasarana', [PrasaranaController::class, 'peminjamanPrasarana'])->name('user.peminjaman_prasarana');
    Route::get('/peminjaman_kendaraan', [KendaraanController::class, 'peminjamanKendaraan'])->name('user.peminjaman_kendaraan');
    Route::post('/peminjaman_kendaraan/create', [PeminjamanController::class, 'pinjamKendaraan'])->name('user.pinjam_create');
   
    Route::get('/prasarana', [PrasaranaController::class, 'viewPrasarana'])->name('user.prasarana');
    Route::get('/prasarana_proyektor', [PrasaranaController::class, 'viewProyektor'])->name('user.prasarana_proyektor');
    Route::get('/detail', [AdminController::class, 'detail'])->name('user.list');
    Route::get('/contact', [AdminController::class, 'contact'])->name('user.contact');
    Route::get('/transaksi/add/{id}',[SewaController::class, 'sewaAdd'])->name('user.sewa_add');
    Route::post('/transaksi/create',[SewaController::class, 'sewaCreate'])->name('user.sewa_mobil');
    Route::get('/sewa/list', [SewaController::class, 'sewaList'])->name('user.sewa.list');
    Route::get('/sewa/edit/{id}', [SewaController::class, 'sewaEdit'])->name('user.sewa_edit');
    Route::post('/sewa/update/{id}', [SewaController::class, 'sewaUpdate'])->name('user.sewa_update');
    Route::get('/sewa/delete/{id}',[SewaController::class, 'sewaDelete'])->name('user.sewa_delete');
    Route::get('/read', [UserReviewController::class, 'ReviewRead'])->name('user.read_review_mobil');
    Route::get('/add', [UserReviewController::class, 'ReviewAdd'])->name('user.add_review_mobil');
    Route::post('/store', [UserReviewController::class, 'ReviewRequest'])->name('review.request');
    Route::get('/delete/{id}', [UserReviewController::class, 'ReviewDelete'])->name('review.delete');
});

Route::get('/home',function(){
    return view('user.index');
})->name('home');


// Route Homepage
// Route::get('/', [AdminController::class, 'home'])->name('admin.frontend.index');
Route::get('user/detail/{id}', [AdminController::class, 'detail'])->name('user.detail');
Route::get('index/detail/{id}', [AdminController::class, 'indexDetail'])->name('index.detail');
Route::get('user/contact', [AdminController::class, 'contact'])->name('user.contact');


// Route Logout
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('user/logout', [HomeController::class, 'logout'])->name('logout');
// Route::get('/owner/logout', [AdminController::class, 'logout'])->name('ologout');





// Route::prefix('transaksi')->group(function () {
//     Route::get('/list', [TransactionController::class, 'listTransaksi'])->name('transaksi.list');
//     // Route::get('/pending', [TransactionController::class, 'add'])->name('transaction.pending');
// });