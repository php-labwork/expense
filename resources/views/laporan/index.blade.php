@include ('templates.header', ['title' => 'Laporan'])

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
                    Buat Laporan Pembukuan
                @endslot
                @include ('laporan.form_laporan_pembukuan')
            @endcomponent
        </div>
        <div class="w3-col m6 s12">
            @component ('components.containers')
                @slot ('container_title')
                    Semua Laporan Pembukuan
                @endslot
                @include ('laporan.table_laporan_pembukuan')
            @endcomponent
        </div>
    </div>
    <div class="w3-row w3-container">
        @component ('components.containers')
            @slot ('container_title')
                Laporan
            @endslot
            @include ('laporan.table_laporan')
        @endcomponent
    </div>
</div>
{{-- Wrapper Content Stop --}}

@include ('templates.footer')