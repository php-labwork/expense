<?php

    namespace App\Transformers;

    use App\Catatan;
    use App\JenisTransaksi;
    use App\User;
    use App\Kategori;
    use App\LaporanPembukuan;
    use League\Fractal\TransformerAbstract;

    class CatatanTransformer extends TransformerAbstract {
        public function transform(Catatan $catatan) {
            $trx = JenisTransaksi::where('id_jenis_transaksi', $catatan->id_jenis_transaksi)->first();
            $user = User::where('id', $catatan->id_user)->first();
            $kategori = Kategori::where('id_kategori', $catatan->id_kategori)->first();
            $laporan = LaporanPembukuan::where('id_laporan_pembukuan', $catatan->id_laporan_pembukuan)->first();
            return [
                'id_catatan'            => $catatan->id_catatan,
                'id_user'               => $catatan->id_user,
                'id_trx'                => $catatan->id_jenis_transaksi,
                'id_laporan'            => $catatan->id_laporan_pembukuan,
                'id_kategori'           => $catatan->id_kategori,
                'nominal'               => $catatan->nominal,
                'tanggal'               => $catatan->tanggal,
                'waktu'                 => $catatan->waktu,
                'full_name'             => $user->name,
                'avatar'                => $user->avatar,
                'trx_name'              => $trx->nama_transaksi,
                'kategori_name'         => $kategori->nama_kategori,
                'laporan_name'          => $laporan->nama_laporan_pembukuan
            ];
        }
    }