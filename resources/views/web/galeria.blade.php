@extends('web.layouts.app')

@section('content')

@if (Route::getCurrentRoute()->getName() == "web.galeria")
    @component('web.layouts._components.top', ['title' => 'Galeria', 'text' => 'Veja todas nossas fotos e vídeos.'])
    @endcomponent
    @php $subtitle = "Galeria"; @endphp
    @section('title', 'Galeria')
@endif
<!-- Galeria -->
<div class="content-lg container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2>{{ $subtitle }}</h2>
        </div>
    </div>
    <!--// end row -->

    <div class="row">


    </div>
    <!--// end row -->
</div>
<!-- End Galeria -->
@endsection