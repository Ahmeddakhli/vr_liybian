@extends('front.layouts.main')

@push('header-scripts')
@endpush

@php
    $page_name = 'home';
@endphp

@foreach ($seo as $seo_home)
    @if ($seo_home->page == 'home')
        @include('front.components.meta', ['meta' => $seo_home])
    @break
@endif
@endforeach

@section('content')
<!-- viewer embed code !-->
<iframe id="svt_iframe_{{ $id }}"
    allow="accelerometer; camera; display-capture; fullscreen; geolocation; gyroscope; magnetometer; microphone; midi; xr-spatial-tracking;"
    width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
    src="https://libyancube.com/software/viewer/index.php?code={{ $id }}"></iframe>
@endsection

@push('scripts')
<script>
    var id_iframe = "svt_iframe_{{ $id }}";
    var iframe_svt = document.getElementById(id_iframe).contentWindow;
    window.addEventListener("message", function(evt) {
        if (evt.data.payload == "initialized") {
            //Tour initialized -> put your code here
            var buttons = document.querySelectorAll("button");
            for (var i = 0; i < buttons.length; ++i) {
                buttons[i].disabled = false;
            }
        }
    }, false);
</script>
@endpush
