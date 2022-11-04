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
                <div id="map">

                </div>
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
@endsection