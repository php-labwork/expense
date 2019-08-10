<div class="w3-row">
    <input type="search" class="w3-input w3-border w3-round w3-margin-bottom" placeholder="Cari disini...">
    <table id="{{ $table_id }}" class="w3-table-all w3-small">
        <thead>
            {{ $table_head }}
        </thead>
        <tbody>
            {{ $table_body }}
        </tbody>
        <tfoot>
            {{ $table_foot }}
        </tfoot>
    </table>
</div>