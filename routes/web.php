<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\KasKeluarController;
use App\Http\Controllers\Admin\KasMasukController;
use App\Http\Controllers\Admin\ListTagihanController;
use App\Http\Controllers\Admin\LokasiPemasanganController;
use App\Http\Controllers\Admin\PaketController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\Admin\PendaftaranController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PushNotificationController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SupportTicketController;
use App\Http\Controllers\Admin\TagihanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;

use App\Http\Controllers\ProfileController;
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

Route::get('/main', function () {
    return view('main');
});
Route::get('/ticket', function () {
    return view('ticket');
});
Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Paket
    Route::resource('pakets', PaketController::class, ['except' => ['store', 'update', 'destroy']]);

    // Pelanggan
    Route::resource('pelanggans', PelangganController::class, ['except' => ['store', 'update', 'destroy']]);

    // Pembayaran
    Route::resource('pembayarans', PembayaranController::class, ['except' => ['store', 'update', 'destroy']]);

    // Tagihan
    Route::resource('tagihans', TagihanController::class, ['except' => ['store', 'update', 'destroy']]);

    // Lokasi Pemasangan
    Route::resource('lokasi-pemasangans', LokasiPemasanganController::class, ['except' => ['store', 'update', 'destroy']]);

    // List Tagihan
    Route::resource('list-tagihans', ListTagihanController::class, ['except' => ['store', 'update', 'destroy']]);

    // Kas Keluar
    Route::resource('kas-keluars', KasKeluarController::class, ['except' => ['store', 'update', 'destroy']]);

    // Kas Masuk
    Route::resource('kas-masuks', KasMasukController::class, ['except' => ['store', 'update', 'destroy']]);

    // Push Notification
    Route::resource('push-notifications', PushNotificationController::class, ['except' => ['store', 'update', 'destroy']]);

    // Support Ticket
    Route::resource('support-tickets', SupportTicketController::class, ['except' => ['store', 'update', 'destroy']]);

    // Pendaftaran
    Route::resource('pendaftarans', PendaftaranController::class, ['except' => ['store', 'update', 'destroy']]);

    // Settings
    Route::post('settings/media', [SettingController::class, 'storeMedia'])->name('settings.storeMedia');
    Route::resource('settings', SettingController::class, ['except' => ['store', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});

require __DIR__.'/auth.php';
