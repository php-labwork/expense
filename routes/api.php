<?php

use Illuminate\Http\Request;

Route::get('jenis_transaksi', 'API_JenisTransaksi@getAll');
Route::get('kategori', 'API_Kategori@getAll')->middleware('auth:api');
Route::get('kategori/trx/{trx_id}', 'API_Kategori@getAllByTrxAndUserID')->middleware('auth:api');
Route::get('kategori/delete/{id_kategori}', 'API_Kategori@deleteKategori')->middleware('auth:api');
Route::get('laporan', 'API_LaporanPembukuan@getAll');

Route::post('auth/login', 'API_Authentication@login');
Route::post('auth/registrasi', 'API_Authentication@registrasi')->middleware('auth:api');
Route::post('kategori/create', 'API_Kategori@insertNewKategori')->middleware('auth:api');
Route::post('kategori/update', 'API_Kategori@updateKategori')->middleware('auth:api');