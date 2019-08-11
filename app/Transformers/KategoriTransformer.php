<?php

    namespace App\Transformers;

    use App\Kategori;
    use App\JenisTransaksi;
    use App\User;
    use League\Fractal\TransformerAbstract;

    class KategoriTransformer extends TransformerAbstract {
        public function transform(Kategori $kategori) {
            $jenis_transaksi = JenisTransaksi::where('id_jenis_transaksi', $kategori->id_jenis_transaksi)->first();
            $user = User::where('id', $kategori->id_user)->first();
            return [
                'id_kategori'       => isset($kategori->id_kategori) ? $kategori->id_kategori : $kategori->id,
                'id_trx'            => $jenis_transaksi->id_jenis_transaksi,
                'id_user'            => $user->id,
                'name'              => $kategori->nama_kategori,
                'trx_name'          => $jenis_transaksi->nama_transaksi,
                'full_name'         => $user->name,
                'avatar'            => $user->avatar
            ];
        }
    }