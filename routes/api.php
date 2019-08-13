<?php

use Illuminate\Http\Request;

Route::get('jenis_transaksi', 'API_JenisTransaksi@getAll');
Route::get('kategori', 'API_Kategori@getAll')->middleware('auth:api');
Route::get('kategori/trx/{trx_id}', 'API_Kategori@getAllByTrxAndUserID')->middleware('auth:api');
Route::get('kategori/delete/{id_kategori}', 'API_Kategori@deleteKategori')->middleware('auth:api');
Route::get('laporan', 'API_LaporanPembukuan@getAll')->middleware('auth:api');
Route::get('laporan/user', 'API_LaporanPembukuan@getAllByUserID')->middleware('auth:api');
Route::get('laporan/delete/{id_laporan_pembukuan}', 'API_LaporanPembukuan@deleteLaporanPembukuan')->middleware('auth:api');
Route::get('catatan', 'API_Catatan@getAll')->middleware('auth:api');

Route::post('auth/login', 'API_Authentication@login');
Route::post('auth/registrasi', 'API_Authentication@registrasi')->middleware('auth:api');
Route::post('kategori/create', 'API_Kategori@insertNewKategori')->middleware('auth:api');
Route::post('kategori/update', 'API_Kategori@updateKategori')->middleware('auth:api');
Route::post('laporan/create', 'API_LaporanPembukuan@insertNewLaporanPembukuan')->middleware('auth:api');
Route::post('laporan/update', 'API_LaporanPembukuan@updateLaporanPembukuan')->middleware('auth:api');
