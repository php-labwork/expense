<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catatan;
use Auth;
use App\Transformers\CatatanTransformer;

class API_Catatan extends Controller {
    
    // Get All Kategori
    public function getAll(Catatan $catatan) {
        if (!isset(Auth::user()->id)) {
            return response()->json([
                "error" => "Invalid Credential"
            ], 401);
        }

        $data = $catatan->where([
            ["id_user", "=", Auth::user()->id]
        ])->get();
        return fractal()
            ->collection($data)
            ->transformWith(new CatatanTransformer)
            ->toArray();
    }
    
}
