<?php

use Illuminate\Http\Request;

Route::get('jenis_transaksi', 'API_JenisTransaksi@getAll');
Route::get('kategori', 'API_Kategori@getAll');
Route::get('kategori/trx/{trx_id}', 'API_Kategori@getAllByTrxAndUserID')->middleware('auth:api');
Route::get('laporan', 'API_LaporanPembukuan@getAll');