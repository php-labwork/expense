<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Kategori extends Model {
    use Notifiable;

    protected $table = 'm_kategori';
    
    protected $fillable = [
        'id_kategori', 'id_jenis_transaksi', 'id_user', 'nama_kategori'
    ];
}
