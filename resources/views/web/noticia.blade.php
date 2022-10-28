@extends('web.layouts.app')

@section('content')

@if (Route::getCurrentRoute()->getName() == "web.noticia")
    @component('web.layouts._partials.top', ['title' => 'Notícias', 'text' => 'Fique por dentro de todas novidades'])
    @endcomponent
    @section('title', 'Notícias')
@endif
<!-- Noticias -->
<div class="content-lg container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2>Últimas Novidades</h2>
            <p></p>
        </div>
    </div>
    <!--// end row -->

    <div class="row">
        <!-- Latest Products -->
        <div class="col-sm-4 sm-margin-b-50">
            <div class="margin-b-20">
                <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                    <img class="img-responsive" src="{{ url ('assets/img/970x647/01.jpg') }}" alt="Latest Products Image">
                </div>
            </div>
            <h4><a href="#">Notícial 1</a> <span class="text-uppercase margin-l-20">28/10/2022</span></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
            <a class="link" href="#">Leia Mais</a>
        </div>
        <!-- End Latest Products -->

        <!-- Latest Products -->
        <div class="col-sm-4 sm-margin-b-50">
            <div class="margin-b-20">
                <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                    <img class="img-responsive" src="{{ url ('assets/img/970x647/02.jpg') }}" alt="Latest Products Image">
                </div>
            </div>
            <h4><a href="#">Notícia 2</a> <span class="text-uppercase margin-l-20">28/10/2022</span></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
            <a class="link" href="#">Leia Mais</a>
        </div>
        <!-- End Latest Products -->

        <!-- Latest Products -->
        <div class="col-sm-4 sm-margin-b-50">
            <div class="margin-b-20">
                <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                    <img class="img-responsive" src="{{ url ('assets/img/970x647/03.jpg') }}" alt="Latest Products Image">
                </div>
            </div>
            <h4><a href="#">Notícia 3</a> <span class="text-uppercase margin-l-20">28/10/2022</span></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
            <a class="link" href="#">Leia Mais</a>
        </div>
        <!-- End Latest Products -->
    </div>
    <!--// end row -->
</div>
<!-- End Noticias -->
@endsection
