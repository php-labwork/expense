<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanPembukuan;
use Auth;
use App\Transformers\LaporanPembukuanTransformer;

class API_LaporanPembukuan extends Controller {
    
    // Get All Laporan Pembukuan
    public function getAll(LaporanPembukuan $laporan) {
        $data = $laporan->all();
        return fractal()
            ->collection($data)
            ->transformWith(new LaporanPembukuanTransformer)
            ->toArray();
    }

    // Get All Laporan Pembukuan By User ID
    public function getAllByUserID(LaporanPembukuan $laporan) {
        if (!isset(Auth::user()->id)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $data = $laporan->where([
            ["id_user", "=", Auth::user()->id]
        ])->get();

        return fractal()
            ->collection($data)
            ->transformWith(new LaporanPembukuanTransformer)
            ->toArray();
    }

    // Insert New Laporan Pembukuan
    public function insertNewLaporanPembukuan(Request $request, LaporanPembukuan $laporan) {
        if (!isset(Auth::user()->id)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $this->validate($request, [
            "name"  => "required"
        ]);

        $data = $laporan->create([
            "id_user"                   => Auth::user()->id,
            "nama_laporan_pembukuan"    => $request->name,
            "created_at"                 => date("Y-m-d H:i:s")
        ]);

        return fractal()
            ->collection($data)
            ->transformWith(new LaporanPembukuanTransformer)
            ->toArray();
    }

    // Update Laporan Pembukuan
    public function updateLaporanPembukuan(Request $request, LaporanPembukuan $laporan) {
        if (!isset(Auth::user()->id)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $this->validate($request, [
            "id_laporan_pembukuan"      => "required",
            "name"                      => "required"
        ]);

        $status = $laporan->where([
            ["id_laporan_pembukuan", "=", $request->id_laporan_pembukuan]
        ])->update([
            "nama_laporan_pembukuan"    => $request->name,
            "updated_at"                 => date("Y-m-d H:i:s")
        ]);

        if ($status) {
            $data = $laporan->where([
                ["id_laporan_pembukuan", "=", $request->id_laporan_pembukuan]
            ])->get();
        } else {
            return response()->json([
                "error" => "Something Went Wrong"
            ], 401);
        }

        return response()->json(fractal()
            ->collection($data)
            ->transformWith(new LaporanPembukuanTransformer)
            ->toArray(), 200);
    }

    // Delete Laporan Pembukuan
    public function deleteLaporanPembukuan(Request $request, LaporanPembukuan $laporan) {
        if (!isset(Auth::user()->id) && !isset($request->id_laporan_pembukuan)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $data = $laporan->where([
            ["id_laporan_pembukuan", "=", $request->id_laporan_pembukuan]
        ])->get();

        $status = $laporan->where([
            ["id_laporan_pembukuan", "=", $request->id_laporan_pembukuan]
        ])->delete();

        if (!$status) {
            return response()->json([
                "error" => "Something Went Wrong"
            ], 401);
        }

        return response()->json(fractal()
            ->collection($data)
            ->transformWith(new LaporanPembukuanTransformer)
            ->toArray(), 200);
    }

}
