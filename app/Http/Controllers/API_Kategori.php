<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Auth;
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

    public function insertNewKategori(Request $request, Kategori $kategori) {
        if (!isset(Auth::user()->id)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $this->validate($request, [
            "id_trx"    => 'required',
            "name"      => 'required'
        ]);

        $data = $kategori->create([
            "id_jenis_transaksi"    => $request->id_trx,
            "id_user"               => Auth::user()->id,
            "nama_kategori"         => $request->name,
            "created_at"            => date("Y-m-d H:i:s")
        ]);

        return response()->json(fractal()
            ->item($data)
            ->transformWith(new KategoriTransformer)
            ->toArray(), 200);
    }

}
