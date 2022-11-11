@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Painel de Configurações - Galeria</div>

                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($categorias as $key => $categoria)
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$categoria->category}}</h5>
                                        <p class="card-text">Categoria: {{$categoria->galeria->count()}} fotos.</p>
                                        <a href="{{ route('adm.galeria.show', $categoria->id) }}" class="card-link"><button type="button" class="btn btn-outline-dark">Ver Galeria</button></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
