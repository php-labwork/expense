<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Auth;
use App\Transformers\KategoriTransformer;

class API_Kategori extends Controller {
    
    // Get All Kategori
    public function getAll(Kategori $kategori) {
        if (!isset(Auth::user()->id)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $data = $kategori->all();
        return fractal()
            ->collection($data)
            ->transformWith(new KategoriTransformer)
            ->toArray();
    }

    // Get All Kategori By TRX ID
    public function getAllByTrxAndUserID(Request $request, Kategori $kategori) {
        if (!isset(Auth::user()->id)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $data = $kategori->where([
            ["id_jenis_transaksi", "=", $request->trx_id],
            ["id_user", "=", Auth::user()->id]
        ])->get();

        return fractal()
            ->collection($data)
            ->transformWith(new KategoriTransformer)
            ->toArray();
    }

    // Insert New Kategori
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
            ->collection($data)
            ->transformWith(new KategoriTransformer)
            ->toArray(), 200);
    }

    // Update Kategori
    public function updateKategori(Request $request, Kategori $kategori) {
        if (!isset(Auth::user()->id)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $this->validate($request, [
            "id_kategori"   => 'required',
            "id_trx"        => 'required',
            "name"          => 'required'
        ]);

        $status = $kategori->where([
            ["id_kategori", "=", $request->id_kategori]
        ])->update([
            "id_jenis_transaksi"    => $request->id_trx,
            "nama_kategori"         => $request->name,
            "updated_at"            => date("Y-m-d H:i:s")
        ]);

        if ($status) {
            $data = $kategori->where([
                ["id_kategori", "=", $request->id_kategori]
            ])->get();
        } else {
            return response()->json([
                "error" => "Something Went Wrong"
            ], 401);
        }

        return response()->json(fractal()
            ->collection($data)
            ->transformWith(new KategoriTransformer)
            ->toArray(), 200);
    }

    // Delete Kategori
    public function deleteKategori(Request $request, Kategori $kategori) {
        if (!isset(Auth::user()->id) && !isset($request->id_kategori)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $data = $kategori->where([
            ["id_kategori", "=", $request->id_kategori]
        ])->get();

        $status = $kategori->where([
            ["id_kategori", "=", $request->id_kategori]
        ])->delete();

        if (!$status) {
            return response()->json([
                "error" => "Something Went Wrong"
            ], 401);
        }

        return response()->json(fractal()
            ->collection($data)
            ->transformWith(new KategoriTransformer)
            ->toArray(), 200);
    }

}
