@extends('web.layouts.app')

@section('content')

@if (Route::getCurrentRoute()->getName() == "web.sobre")
    @component('web.layouts._components.top', ['title' => 'Sobre Nós', 'text' => 'Conheça um pouco sobre nossa história...', 'bg' => url ('assets/img/top/top.jpg')])
    @endcomponent
    @section('title', 'Sobre Nós')
@endif
<!-- Testimonials -->
<div class="content-lg container">
    <div class="row">
        <div class="col-sm-9">
            <h2>Nossa história</h2>
            <div class="txt-pag">
                {!!$sobre[0]->sobre!!}
            </div>

        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Testimonials -->
@endsection
