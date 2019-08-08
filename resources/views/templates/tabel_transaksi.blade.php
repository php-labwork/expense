<!-- Table Transaksi -->
<div class="w3-row w3-margin-bottom w3-margin-top">
    <div class="w3-row w3-margin-bottom">
        <a href="#" class="w3-container w3-bottombar w3-col m6 w3-hover-light-grey w3-center" style="text-decoration:none">
            <div class="w3-padding">Pemasukan</div>
        </a>
        <a href="#" class="w3-container w3-bottombar w3-col m6 w3-hover-light-grey w3-center" style="text-decoration:none">
            <div class="w3-padding">Pengeluaran</div>
        </a>
    </div>
    <div class="w3-row w3-responsive">
        <!-- Table Pemasukkan -->
        @component ('components.tables')
            @slot ('table_id')
                table_transaksi_pemasukan
            @endslot
            @slot ('table_head')
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jenis Transaksi</th>
                    <th>Kategori</th>
                    <th>Laporan Pembukuan</th>
                    <th>Nominal</th>
                    <th>Tanggal / Waktu</th>
                    <th>Aksi</th>
                </tr>
            @endslot
            @slot ('table_body')
                <tr>
                    <td colspan="8">Belum ada transaksi</td>
                </tr>
            @endslot
            @slot ('table_foot')
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jenis Transaksi</th>
                    <th>Kategori</th>
                    <th>Laporan Pembukuan</th>
                    <th>Nominal</th>
                    <th>Tanggal / Waktu</th>
                    <th>Aksi</th>
                </tr>
            @endslot
        @endcomponent

        <!-- Table Pengeluaran -->
        @component ('components.tables')
            @slot ('table_id')
                table_transaksi_pengeluaran
            @endslot
            @slot ('table_head')
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jenis Transaksi</th>
                    <th>Kategori</th>
                    <th>Laporan Pembukuan</th>
                    <th>Nominal</th>
                    <th>Tanggal / Waktu</th>
                    <th>Aksi</th>
                </tr>
            @endslot
            @slot ('table_body')
                <tr>
                    <td colspan="8">Belum ada transaksi</td>
                </tr>
            @endslot
            @slot ('table_foot')
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jenis Transaksi</th>
                    <th>Kategori</th>
                    <th>Laporan Pembukuan</th>
                    <th>Nominal</th>
                    <th>Tanggal / Waktu</th>
                    <th>Aksi</th>
                </tr>
            @endslot
        @endcomponent
    </div>
</div>