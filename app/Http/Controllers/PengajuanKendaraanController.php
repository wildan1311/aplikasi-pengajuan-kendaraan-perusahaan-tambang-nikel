<?php

namespace App\Http\Controllers;

use App\Models\ApproveModel;
use App\Models\KendaraanModel;
use App\Models\PesanModel;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class PengajuanKendaraanController extends Controller
{
    public function create(Request $request){
        $nama = $request->nama;
        $tanggal_pesan = $request->tanggal_pesan;
        $tanggal_kembali = $request->tanggal_kembali;
        $id_kendaraan = $request->kendaraan_id;
        $driver_name = $request->driver_name;
        $approval1 = $request->approval1_id;
        $approval2 = $request->approval2_id;

        $pesan = PesanModel::create([
            'nama' => $nama,
            'kendaraan_id' => $id_kendaraan,
            'tanggal_pesan' => $tanggal_pesan,
            'tanggal_kembali' => $tanggal_kembali,
            'driver' => $driver_name
        ]);

        ApproveModel::create([
            'pesanan_id' => $pesan->id,
            'user_id' => $approval1,
            'status' => 'waiting',
            'priority' => 1
        ]);

        ApproveModel::create([
            'pesanan_id' => $pesan->id,
            'user_id' => $approval2,
            'status' => 'waiting',
            'priority' => 2
        ]);

        return redirect('/');
    }

    public function index(){
        $kendaraan = KendaraanModel::all();
        $approval1 = User::where('role', 'user')->get();
        $approval2 = User::where('role', 'user')->get();
        $driver = User::where('role', 'driver')->get();

        // dd($kendaraan);
        return view('formPengajuan', [
            'driver' => $driver,
            'kendaraan' => $kendaraan,
            'approval1' => $approval1,
            'approval2' => $approval2
        ]);
    }

    public function update($id, Request $request){
        $approve = ApproveModel::find($id);
        $id_pesanan = $approve->pesanan_id;

        if($approve->priority == 1){
            $approve->status = $request->status;
        }else{
            $prioritas1 = ApproveModel::where([
                    ['pesanan_id', '=', $id_pesanan],
                    ['priority', '=', 1]
                ])->first();
            if($prioritas1->status == 'approved' || $prioritas1->status == 'rejected'){
                $approve->status = $request->status;
            }else{
                $approve->status = 'waiting';
                \RealRashid\SweetAlert\Facades\Alert::error('Err', 'Menunggu level 1 melakukan approve');
                return redirect('/approve-pengajuan')->with('error', "Menunggu level 1 melakukan approve");
            }
        }

        ApproveModel::find($id)->update([
            'status' => $request->status
        ]);
        \RealRashid\SweetAlert\Facades\Alert::success('Success', 'Pengajuan Diapprove');

        return redirect('/approve-pengajuan');
    }
}
