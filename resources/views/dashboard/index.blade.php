@include ('templates.header', ['title' => 'Dashboard'])

{{-- Wrapper Content Start --}}
@include ('templates.navbar')
@include ('templates.sidebar')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    @include ('templates.sitemap')
    @include ('dashboard.balance-bar')
    <div class="w3-row w3-container">
        <div class="w3-col m6 s12">
            @component ('components.containers')
                @slot ('container_title')
                    Buat Catatan
                @endslot
                @include ('templates.form_catatan')
            @endcomponent
        </div>
    </div>
</div>
{{-- Wrapper Content Stop --}}

@include ('templates.footer')