<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisTransaksi;
use App\Transformers\JenisTransaksiTransformer;

class API_JenisTransaksi extends Controller {
    
    public function getAll(JenisTransaksi $jenisTrx) {
        $data = $jenisTrx->all();
        return fractal()
            ->collection($data)
            ->transformWith(new JenisTransaksiTransformer)
            ->toArray();
    }

}
