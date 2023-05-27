<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApproveModel extends Model
{
    use HasFactory;

    protected $table = 'approve';

    protected $fillable = [
        'pesanan_id',
        'user_id',
        'status',
        'priority'
    ];

    public function pesan(){
        return $this->hasOne(PesanModel::class, 'id', 'pesanan_id');
    }
}
