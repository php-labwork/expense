<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Kategori extends Model {
    use Notifiable;

    protected $table = 'm_kategori';
    
    protected $fillable = [
        'nama_kategori'
    ];
}
