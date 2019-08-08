<!-- Form Catatan -->
<form>
    <div class="w3-row w3-margin-bottom w3-margin-top">
        <label for="jenis_transaksi">Jenis Transaksi</label>
        <select name="jenis_transaksi" id="jenis_transaksi" class="w3-input w3-border w3-round">
        </select>
    </div>
    <div class="w3-row w3-margin-bottom">
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori" class="w3-input w3-border w3-round">
        </select>
    </div>
    <div class="w3-row w3-margin-bottom">
        <label for="laporan_pembukuan">Laporan Pembukuan</label>
        <select name="laporan_pembukuan" id="laporan_pembukuan" class="w3-input w3-border w3-round">
        </select>
    </div>
    <div class="w3-row w3-margin-bottom">
        <label for="nominal">Nominal</label>
        <input type="number" name="nominal" id="nominal" class="w3-input w3-border w3-round">
    </div>
    <div class="w3-row w3-margin-bottom">
        <label for="date_and_time">Tanggal & Waktu</label>
        <div class="w3-row">
            <input type="date" name="date_and_time" id="date_and_time" class="w3-input w3-border w3-round w3-col m6">
            <input type="time" name="date_and_time" id="date_and_time" class="w3-input w3-border w3-round w3-col m6">
        </div>
    </div>
    <div class="w3-row w3-margin-bottom">
        <div class="w3-right">
            <button class="w3-btn w3-red w3-round w3-border w3-border-red" type="reset">Cancel</button>
            <button class="w3-btn w3-blue w3-round w3-border w3-border-blue" type="button">Simpan</button>
        </div>
    </div>
</form>