@extends('web.layouts.app')

@section('content')

@if (isset($noticia))
    @component('web.layouts._components.top', ['title' => $noticia->title, 'text' => $noticia->created_at->format('d/m/Y H:i')])
    @endcomponent
    @php $subtitle = ""; @endphp
@else
    @component('web.layouts._components.top', ['title' => 'Notícias', 'text' => 'Fique por dentro de todas novidades'])
    @endcomponent
    @php $subtitle = "Últimas Novidades"; @endphp
@endif

@section('title', 'Notícias')

<!-- Noticias -->
<div class="content-lg container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2>{{ $subtitle }}</h2>
            @if (isset($noticia))
                <div class="txt-pag">
                    <p>{{ $noticia->text }}</p>
                </div>

            @endif
        </div>
    </div>
    <!--// end row -->

    <div class="row">

        @if (!isset($noticia))
            @foreach ($noticias as $key => $noticia)
                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                <h4><a href="{{ route('web.noticia', ['id' => $noticia->id]) }}">{{ $noticia->title }}</a> <span class="text-uppercase margin-l-20">{{ $noticia->created_at->format('d/m/Y H:i') }}</span></h4>
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="{{ url ($noticia->image) }}" alt="Latest Products Image">
                        </div>
                    </div>

                    <p>
                        @if (strlen($noticia->desc) > 150)
                            {{ mb_strimwidth($noticia->desc, 0, 150, "...") }}
                        @else
                            {{ $noticia->desc }}
                        @endif
                        </p>
                    <a class="link" href="{{ route('web.noticia', ['id' => $noticia->id]) }}">Leia Mais</a>
                </div>
                <!-- End Latest Products -->
            @endforeach
        @endif
    </div>
    <!--// end row -->
</div>
<!-- End Noticias -->
@endsection
