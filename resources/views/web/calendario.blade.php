@extends('web.layouts.app')

@section('content')

@if (Route::getCurrentRoute()->getName() == "web.calendario")
    @component('web.layouts._components.top', ['title' => 'Calendário', 'text' => 'Acompanhe aqui a data de todos os eventos.'])
    @endcomponent
    @php $subtitle = "Calendário"; @endphp
    @section('title', 'Calendário')
@endif
<!-- Calendário -->
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
<!-- End Calendário -->
@endsection