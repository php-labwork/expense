<!-- Table Kategori -->
@component ('components.tables')
    @slot ('table_id')
        table_kategori
    @endslot
    @slot ('table_head')
        <tr>
            <th>No</th>
            <th>Jenis Transaksi</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    @endslot
    @slot ('table_body')
        <tr>
            <td colspan="4">Belum ada kategori</td>
        </tr>
    @endslot
    @slot ('table_foot')
        <tr>
            <th>No</th>
            <th>Jenis Transaksi</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    @endslot
@endcomponent