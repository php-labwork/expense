<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class JenisTransaksi extends Model {
    use Notifiable;

    protected $table = 'm_jenis_transaksi';
    
    protected $fillable = [
        'nama_transaksi'
    ];
}
