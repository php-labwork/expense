<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanPembukuan;
use App\Transformers\LaporanPembukuanTransformer;

class API_LaporanPembukuan extends Controller {
    
    public function getAll(LaporanPembukuan $laporan) {
        $data = $laporan->all();
        return fractal()
            ->collection($data)
            ->transformWith(new LaporanPembukuanTransformer)
            ->toArray();
    }

}
