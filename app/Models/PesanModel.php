<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanModel extends Model
{
    use HasFactory;

    protected $table = 'pesan';

    protected $fillable = [
        'nama',
        'kendaraan_id',
        'tanggal_pesan',
        'tanggal_kembali',
        'driver',
    ];

    public function approve(){
        return $this->belongsTo(ApproveModel::class, 'pesanan_id');
    }

    public function kendaraan(){
        return $this->hasOne(KendaraanModel::class, 'id', 'kendaraan_id');
    }
}
