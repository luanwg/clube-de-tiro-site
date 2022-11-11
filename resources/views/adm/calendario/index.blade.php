@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Painel de Configurações - Calendario</div>

                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($calendarios as $key => $calendario)
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$calendario->title}}</h5>
                                        <h6 class="card-subtitle">{{$calendario->starting_at->format('d/m/Y H:i')}} - {{$calendario->ending_at->format('d/m/Y H:i')}}</h6>
                                        <p class="card-text">Categoria: <button type="button" class="btn btn-sm" style="cursor: default; background-color: {{$calendario->evento->color}}; color: #ffffff;">{{$calendario->evento->name}}</button></p>
                                        <a href="{{ route('adm.calendario.edit', $calendario->id) }}" class="card-link"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                                        <button type="button" class="btn btn-outline-danger card-link" data-bs-toggle="modal" data-bs-target="#excluir{{$calendario->id}}">Excluir</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="excluir{{$calendario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Excluir Evento</h5>
                                        </div>
                                        <div class="modal-body">
                                            Tem certeza que deseja excluir este evento?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form method="post" action="{{ route('adm.calendario.destroy', $calendario->id) }}">
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
