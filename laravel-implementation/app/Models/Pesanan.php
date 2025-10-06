<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    public $timestamps = false;

    protected $fillable = [
        'nama_pelanggan', 'nomor_meja', 'total_harga', 'status', 'tanggal_pesan'
    ];

    public function detail()
    {
        return $this->hasMany(DetailPesanan::class, 'id_pesanan');
    }
}
