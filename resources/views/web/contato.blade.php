@extends('web.layouts.app')

@section('content')

@if (Route::getCurrentRoute()->getName() == "web.contato")
    @component('web.layouts._components.top', ['title' => 'Fale Conosco', 'text' => 'TEm alguma dúvida ou quer nos visitar? Entre em contato agora mesmo!'])
    @endcomponent
    @php $subtitle = "Contatos"; @endphp
    @section('title', 'Fale Conosco')
@endif
<!-- Contato -->
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
<!-- End Contato -->
@endsection