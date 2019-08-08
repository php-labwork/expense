@include ('templates.header', ['title' => 'Catatan'])

{{-- Wrapper Content Start --}}
@include ('templates.navbar')
@include ('templates.sidebar')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    @include ('templates.sitemap')
    <div class="w3-row w3-container">
        <div class="w3-col m6 s12">
            @component ('components.containers')
                @slot ('container_title')
                    Buat Catatan
                @endslot
                @include ('templates.form_catatan')
            @endcomponent
        </div>
        <div class="w3-col m6 s12">
            @component ('components.containers')
                @slot ('container_title')
                    Kategori
                @endslot
                <div class="w3-row w3-margin-bottom w3-margin-top">
                    <div class="w3-row w3-margin-bottom">
                        <a href="#" class="w3-container w3-bottombar w3-col m6 w3-hover-light-grey w3-center" style="text-decoration:none">
                            <div class="w3-padding">Buat Kategori</div>
                        </a>
                        <a href="#" class="w3-container w3-bottombar w3-col m6 w3-hover-light-grey w3-center" style="text-decoration:none">
                            <div class="w3-padding">Semua Kategori</div>
                        </a>
                    </div>
                    <div class="w3-row w3-responsive">
                        @include ('catatan.form_kategori')
                        @include ('catatan.tabel_kategori')
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
    
    <div class="w3-row w3-container">
        @component ('components.containers')
            @slot ('container_title')
                Transaksi Terakhir
            @endslot
            @include ('templates.tabel_transaksi')
        @endcomponent
    </div>
</div>
{{-- Wrapper Content Stop --}}

@include ('templates.footer')