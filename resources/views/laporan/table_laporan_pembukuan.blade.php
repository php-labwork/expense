<!-- Table Laporan Pembukuan -->
<div class="w3-row w3-margin-top w3-margin-bottom">
    @component ('components.tables')
        @slot ('table_id')
            table_laporan_pembukuan
        @endslot
        @slot ('table_head')
            <tr>
                <th>No</th>
                <th>Nama Laporan Pembukuan</th>
                <th>Aksi</th>
            </tr>
        @endslot
        @slot ('table_body')
            <tr>
                <td colspan="3">Belum ada laporan pembukuan</td>
            </tr>
        @endslot
        @slot ('table_foot')
            <tr>
                <th>No</th>
                <th>Nama Laporan Pembukuan</th>
                <th>Aksi</th>
            </tr>
        @endslot
    @endcomponent
</div>