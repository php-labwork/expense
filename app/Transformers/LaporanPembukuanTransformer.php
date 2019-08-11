<?php

    namespace App\Transformers;

    use App\LaporanPembukuan;
    use App\User;
    use League\Fractal\TransformerAbstract;

    class LaporanPembukuanTransformer extends TransformerAbstract {
        public function transform(LaporanPembukuan $laporan) {
            $user = User::where('id', $laporan->id_user)->first();
            return [
                'id_laporan'            => $laporan->id_laporan_pembukuan,
                'id_user'            => $user->id,
                'name'              => $laporan->nama_laporan_pembukuan,
                'full_name'         => $user->name,
                'avatar'            => $user->avatar
            ];
        }
    }