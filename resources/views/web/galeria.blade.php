@extends('web.layouts.app')

@section('content')

@component('web.layouts._components.top', ['title' => 'Galeria', 'text' => 'Veja todas nossas fotos e vídeos.'])
@endcomponent
@section('title', 'Galeria')

<!-- Galeria -->
<div class="content-lg container">
    <div class="row">
        <div class="panel-container show">
            <div class="panel-content">
                <!-- id=categoria -->
                @foreach ($galerias_categorias as $key => $categorias)
                    <div class="margin-b-40">
                        <h4>{{$categorias->category}}</h4>
                        <div id="lightgallery-{{$categorias->id}}">
                            @foreach ($galerias as $key => $galeria)
                                @if ($categorias->id == $galeria->galerias_categorias_id)
                                    <a class="" href="{{ url ('storage/'.$galeria->image_src) }}" data-sub-html="{{$galeria->desc}}">
                                        <img class="img-responsive" src="{{ url ('storage/'.$galeria->image_src) }}" alt="{{$categorias->category}}">
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Galeria -->

<script>
    
    $(document).ready(function()
    {
        @foreach ($galerias_categorias as $key => $categorias)

            var $initScope{{$categorias->id}} = $('#lightgallery-{{$categorias->id}}');
            if ($initScope{{$categorias->id}}.length)
            {
                $initScope{{$categorias->id}}.justifiedGallery(
                {
                    border: -1,
                    rowHeight: 150,
                    margins: 8,
                    waitThumbnailsLoad: true,
                    randomize: false,
                }).on('jg.complete', function()
                {
                    $initScope{{$categorias->id}}.lightGallery(
                    {
                        customSlideName: true,
                        galleryId: "{{$categorias->id}}",
                        thumbnail: true,
                        animateThumb: true,
                        showThumbByDefault: true,
                        download: false,
                    });

                });
            };
            $initScope{{$categorias->id}}.on('onAfterOpen.lg', function(event)
            {
                $('body').addClass("overflow-hidden");
            });
            $initScope{{$categorias->id}}.on('onCloseAfter.lg', function(event)
            {
                $('body').removeClass("overflow-hidden");
            });
        @endforeach
    });

</script>
<link rel="stylesheet" media="screen, print" href="{{ url ('assets/css/fa-regular.css') }}">
@endsection