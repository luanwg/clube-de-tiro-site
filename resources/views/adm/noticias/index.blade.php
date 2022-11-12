@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Painel de Configurações - Notícias</div>

                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($noticias as $key => $noticia)
                            <div class="col">
                                <div class="card">
                                    <img src="{{url('storage/'.$noticia->image)}}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$noticia->title}}</h5>
                                        <h6 class="card-subtitle">Categoria: {{$noticia->categoria->category}}</h6>
                                        <h6 class="card-text">{{$noticia->created_at->format('d/m/Y H:i')}}</h6>
                                        <p class="card-text">{{$noticia->desc}}</p>
                                        <a href="{{ route('adm.noticias.edit', $noticia->id) }}" class="card-link"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                                        <button type="button" class="btn btn-outline-danger card-link" data-bs-toggle="modal" data-bs-target="#excluir{{$noticia->id}}">Excluir</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="excluir{{$noticia->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Excluir Notícia</h5>
                                        </div>
                                        <div class="modal-body">
                                            Tem certeza que deseja excluir esta notícia?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form method="post" action="{{ route('adm.noticias.destroy', $noticia->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                            </form>
                                            
                                        </div>
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
