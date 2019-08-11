<?php

    namespace App\Transformers;

    use App\JenisTransaksi;
    use League\Fractal\TransformerAbstract;

    class JenisTransaksiTransformer extends TransformerAbstract {
        public function transform(JenisTransaksi $jenisTrx) {
            return [
                'id_trx'    => $jenisTrx->id_jenis_transaksi,
                'name'      => $jenisTrx->nama_transaksi
            ];
        }
    }