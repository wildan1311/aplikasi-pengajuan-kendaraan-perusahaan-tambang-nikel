<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class KendaraanModel extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';

    protected $fillable = [
        'jenis_kendaraan',
        'nama_kendaraan',
        'no_plat',
    ];

    public function pesan(){
        return $this->belongsTo(PesanModel::class, 'kendaraan_id', 'id');
    }
}
