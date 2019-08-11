<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class LaporanPembukuan extends Model {
    use Notifiable;

    protected $table = 'm_laporan_pembukuan';
    
    protected $fillable = [
        'nama_laporan_pembukuan'
    ];
}
