<?php

namespace App\Http\Controllers;

use App\Models\KendaraanModel;
use App\Models\PesanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kendaraan extends Controller
{
    public function index(){
        $kendaraan = KendaraanModel::all();

        return view('kendaraan')->with("kendaraan", $kendaraan);
    }

    public function detail($id){
        $detailPesananKendaraan = DB::table('pesan')
                                        ->select(DB::raw('count(*) as total, MONTH(tanggal_pesan) as month'), 'kendaraan_id')
                                        ->groupBy('month', 'kendaraan_id')
                                        ->having('kendaraan_id', $id)
                                        ->pluck('total', 'month');
        return view('detailKendaraan')->with('detailPesananKendaraan', $detailPesananKendaraan);
    }

    public function create(){
        return view('tambahKendaraan');
    }

    public function store(Request $request){
        KendaraanModel::create([
            'nama_kendaraan' => $request->nama_kendaraan,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'no_plat' => $request->no_plat
        ]);

        return redirect('/kendaraan');
    }
}
