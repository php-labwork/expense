<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Catatan extends Model {
    use Notifiable;

    protected $table = 't_catatan';
    
    protected $fillable = [
        'id_catatan', 'id_user', 'id_jenis_transaksi', 'id_laporan_pembukuan', 'id_kategori',
        'nominal', 'tanggal', 'waktu'
    ];
}
