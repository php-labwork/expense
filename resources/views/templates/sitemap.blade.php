<!-- Header -->
<header class="w3-container w3-margin-left w3-margin-right" style="padding-top:22px">
    @foreach ($mainMenu as $item)
        @if ($_SERVER['REQUEST_URI'] == $item->path)    
            <h5><b><i class="{{ $item->icon }}"></i> {{ $item->text }}</b></h5>
        @endif
    @endforeach
</header>