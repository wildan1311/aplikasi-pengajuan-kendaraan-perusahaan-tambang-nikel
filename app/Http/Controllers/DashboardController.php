<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $detailPesananKendaraan = DB::table('pesan')
                                            ->join('kendaraan', 'pesan.kendaraan_id', '=', 'kendaraan.id')
                                            ->select(DB::raw('count(*) as total'), 'kendaraan.nama_kendaraan', 'kendaraan.jenis_kendaraan', 'kendaraan.id','pesan.tanggal_pesan')
                                            ->groupBy('kendaraan_id');

        // buat chart
        $chartPesanan = $detailPesananKendaraan->pluck('total', 'nama_kendaraan');
        $tablePesanan = $detailPesananKendaraan->get();

        return view('main', [
            'chartPesanan' => $chartPesanan,
            'tablePesanan' => $tablePesanan
        ]);
    }
}
