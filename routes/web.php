<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kendaraan;
use App\Http\Controllers\PengajuanKendaraanController;
use App\Models\ApproveModel;
use App\Models\PesanModel;
use Illuminate\Support\Facades\DB;

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

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        // Buat tabel
        $detailPesananKendaraan = DB::table('pesan')
                                            ->join('kendaraan', 'pesan.kendaraan_id', '=', 'kendaraan.id')
                                            ->select(DB::raw('count(*) as total, MONTH(tanggal_pesan) as month'), 'kendaraan.nama_kendaraan', 'kendaraan.jenis_kendaraan', 'kendaraan.id','pesan.tanggal_pesan')
                                            ->groupBy('month', 'kendaraan_id');

        // buat chart
        $chartPesanan = $detailPesananKendaraan->pluck('total', 'nama_kendaraan');
        $tablePesanan = $detailPesananKendaraan->get();

        return view('main', [
            'chartPesanan' => $chartPesanan,
            'tablePesanan' => $tablePesanan
        ]);
    });

    Route::post('/form-pengajuan', [PengajuanKendaraanController::class, 'create']);
    Route::get('/form-pengajuan', [PengajuanKendaraanController::class, 'index']);

    Route::get('/approve-pengajuan', function () {
        $approve = ApproveModel::with('pesan')->where('user_id', Auth()->id())->get();
        return view('approvePengajuan', [
            'approve' => $approve,
        ]);
    });

    Route::put('/approve-pengajuan/{id}', [PengajuanKendaraanController::class, 'update']);

    Route::get('/kendaraan', [Kendaraan::class, 'index']);
    Route::get('/tambah-kendaraan', [Kendaraan::class, 'create']);
    Route::post('/kendaraan', [Kendaraan::class, 'store']);
    Route::get('/detail-kendaraan/{id}', [Kendaraan::class, 'detail']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
