@extends('web.layouts.app')

@section('content')

@component('web.layouts._components.top', ['title' => 'Fale Conosco', 'text' => 'TEm alguma dúvida ou quer nos visitar? Entre em contato agora mesmo!'])
@endcomponent
@section('title', 'Fale Conosco')

<!-- Contato -->
<div class="content-lg container">

    <div class="row">

        <div class="row">
            <div class="col-md-6">
                <div id="map"></div>
            </div>
        </div>

    </div>
    <!--// end row -->
</div>
<!-- End Contato -->


 

<style>

#map {
    width: 100%;
}

</style>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzYsvi1JAcnaL3s8gXWG_P10s__KGzwJM&callback=initMap"></script> -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzYsvi1JAcnaL3s8gXWG_P10s__KGzwJM&callback=initMap&v=weekly" defer></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzYsvi1JAcnaL3s8gXWG_P10s__KGzwJM"></script>

<script type="text/javascript">
    let map;
    window.addEventListener('load', (event) => {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8,
        });
    });

</script>
@endsection