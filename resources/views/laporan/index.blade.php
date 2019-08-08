@include ('templates.header', ['title' => 'Laporan'])

{{-- Wrapper Content Start --}}
@include ('templates.navbar')
@include ('templates.sidebar')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    @include ('templates.sitemap')
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