<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Transformers\KategoriTransformer;

class API_Kategori extends Controller {
    
    public function getAll(Kategori $kategori) {
        $data = $kategori->all();
        return fractal()
            ->collection($data)
            ->transformWith(new KategoriTransformer)
            ->toArray();
    }

    public function getAllByTrxAndUserID(Request $request, Kategori $kategori) {
        $data = $kategori->where([
            ["id_jenis_transaksi", "=", $request->trx_id],
            ["id_user", "=", Auth::user()->id]
        ])->get();
        return fractal()
            ->collection($data)
            ->transformWith(new KategoriTransformer)
            ->toArray();
    }

}
