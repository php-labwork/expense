<!-- Table Laporan -->
<div class="w3-row w3-margin-top w3-margin-bottom">
    <div class="w3-row w3-margin-bottom" id="filter_table_laporan">
        <div class="w3-col m3 s12">
            <label for="tahun">Tahun</label>
            <select name="tahun" id="tahun" class="w3-input w3-border w3-round">
            </select>
        </div>
        <div class="w3-col m3 s12">
            <label for="bulan">Bulan</label>
            <select name="bulan" id="bulan" class="w3-input w3-border w3-round">
            </select>
        </div>
        <div class="w3-col m3 s12">
            <label for="jenis_transaksi">Jenis Transaksi</label>
            <select name="jenis_transaksi" id="jenis_transaksi" class="w3-input w3-border w3-round">
            </select>
        </div>
        <div class="w3-col m3 s12">
            <label for="jenis_transaksi">Laporan Pembukuan</label>
            <select name="jenis_transaksi" id="jenis_transaksi" class="w3-input w3-border w3-round">
            </select>
        </div>
    </div>
    @component ('components.tables')
        @slot ('table_id')
            table_laporan
        @endslot
        @slot ('table_head')
            <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Jenis Transaksi</th>
                <th>Laporan Pembukuan</th>
                <th>Aksi</th>
            </tr>
        @endslot
        @slot ('table_body')
            <tr>
                <td colspan="6">Belum ada laporan</td>
            </tr>
        @endslot
        @slot ('table_foot')
            <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Jenis Transaksi</th>
                <th>Laporan Pembukuan</th>
                <th>Aksi</th>
            </tr>
        @endslot
    @endcomponent
</div>