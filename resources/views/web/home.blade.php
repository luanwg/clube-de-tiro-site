@extends('web.layouts.app')

@section('title', 'Home')

@section('content')

    <div class="conteudo-destaque">

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img class="img-responsive" src="{{ url ('assets/img/slides/slide01.jpg') }}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">CET</h1>
                                <p>Clube Extremense de Tiro - Venha nos conhecer!</p>
                            </div>
                            <a href="#scroll-conhecer" class="btn-theme btn-theme-sm btn-white-brd text-uppercase"><span class="icon-arrow-down large-icons"></span></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img class="img-responsive" src="{{ url ('assets/img/slides/slide02.jpg') }}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">CET</h2>
                                <p>Extremense de Tiro - Venha nos conhecer!</p>
                            </div>
                            <a href="#scroll-conhecer" class="btn-theme btn-theme-sm btn-white-brd text-uppercase"><span class="icon-arrow-down large-icons"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div id="scroll-conhecer"></div>
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="content container">
                    <h2>Próximos Eventos</h2>
                </div>
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-12">
                        @foreach ($calendarios as $key => $calendario)
                            <div class="col-sm-4 sm-margin-b-2">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-calendar"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>{{ $calendario->title }}</h3>
                                            <p><button type="button" class="btn" style="cursor: default; background-color: {{$calendario->evento->color}}; color: #ffffff;">{{$calendario->evento->name}}</button></p>
                                            <p class="margin-b-5">{{ $calendario->starting_at->format('d/m/Y H:m') }} - {{ $calendario->ending_at->format('d/m/Y H:m') }}</p>
                                        </div>
                                        <a href="{{ route('web.calendario') }}" class="content-wrapper-link"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="direita wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".7s">
                        <a href="{{ route('web.calendario') }}" class="btn-theme btn-theme-sm text-uppercase">Ver Todos</a>
                    </div>
                </div>
                <!--// end row -->
                
                <div class="content container">
                    <h2>Últimas Notícias</h2>
                </div>
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-12">
                        @foreach ($noticias as $key => $noticia)
                            <div class="col-sm-4 sm-margin-b-2">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon icon-calendar"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>{{ $noticia->title }}</h3>
                                            <p>
                                                @if (strlen($noticia->desc) > 150)
                                                    {{ mb_strimwidth($noticia->desc, 0, 150, "...") }}
                                                @else
                                                    {{ $noticia->desc }}
                                                @endif
                                            </p>
                                            <p class="margin-b-5"><span class="text-uppercase margin-l-20">{{ $noticia->created_at->format('d/m/Y H:i') }}</span></p>
                                        </div>
                                        <a href="{{ route('web.noticia', ['id' => $noticia->id]) }}" class="content-wrapper-link"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="direita wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".7s">
                        <a href="{{ route('web.noticias') }}" class="btn-theme btn-theme-sm text-uppercase">Ver Todos</a>
                    </div>
                </div>
                <!--// end row -->

            </div>
        </div>
        <!-- End Service -->

        <!-- Work -->
        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Galeria</h2>
                        <p></p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>

                    @foreach ($galerias as $key => $galeria)
                        @if ($loop->first)
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                        @else
                            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        @endif
                        
                            <!-- Work -->
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".{{$key}}s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{ url ('storage/'.$galeria->image_src) }}" alt="{{$galeria->title}}">
                                </div>
                                <div class="work-content">
                                    <h3 class="color-white margin-b-5">{{$galeria->title}}</h3>
                                    <p class="color-white margin-b-0">Clique na imagem para ir para a Galeria</p>
                                </div>
                                <a class="content-wrapper-link" href="{{ route('web.galeria') }}"></a>
                            </div>
                            <!-- End Work -->
                        </div>

                    @endforeach
                    

                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->
        <!--========== END PAGE LAYOUT ==========-->

    </div>
@endsection
