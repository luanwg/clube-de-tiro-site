@extends('web.layouts.app')

@section('content')

@if (Route::getCurrentRoute()->getName() == "web.cursos")
    @component('web.layouts._components.top', ['title' => 'Cursos', 'text' => 'Capacitação no uso esportivo de pistolas, revólveres, carabinas  e espingardas fornecendo noções Básicas do tiro prático.'])
    @endcomponent
    @php $subtitle = "Nossos Cursos"; @endphp
    @section('title', 'Cursos')
@endif
<!-- Cursos -->
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
<!-- End Cursos -->
@endsection
