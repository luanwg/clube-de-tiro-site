@extends('web.layouts.app')

@section('content')

@if (isset($curso))
    @component('web.layouts._components.top', ['title' => $curso->name, 'text' => ''])
    @endcomponent
@else
    @component('web.layouts._components.top', ['title' => 'Cursos', 'text' => 'Capacitação no uso esportivo de pistolas, revólveres, carabinas  e espingardas fornecendo noções Básicas do tiro prático.'])
    @endcomponent
@endif

@section('title', 'Cursos')

<!-- Cursos -->
<div class="container">
    <div class="row">

        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-sm container">
                
                @isset($curso)
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>{{ $curso->name }}</h2>
                            <div>
                                <p>{!! $curso->full_desc !!}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row row-space-2 margin-b-2">
                        @foreach ($cursos as $key => $curso)
                        
                            <div class="col-sm-4 sm-margin-b-2">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            <i class="service-icon {{$curso->icon}}"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3>
                                                {{$curso->name}}
                                            </h3>
                                            <p class="margin-b-5">{{$curso->mini_desc}}</p>
                                        </div>
                                        <a href="{{ route('web.curso', ['id' => $curso->id]) }}" class="content-wrapper-link"></a>
                                    </div>
                                </div>
                            </div>
                        
                        @endforeach
                    </div>
                @endisset

                
                <!--// end row -->

            </div>
        </div>
        <!-- End Service -->

    </div>
    <!--// end row -->
</div>
<!-- End Cursos -->
@endsection
