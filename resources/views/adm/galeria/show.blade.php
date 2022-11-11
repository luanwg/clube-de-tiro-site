@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Painel de Configurações - Galeria</div>

                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($galerias as $key => $galeria)
                            <div class="col">
                                <div class="card">
                                    <img src="{{url('storage/'.$galeria->image_src)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$galeria->title}}</h5>
                                        <p>{{$galeria->desc}}</p>
                                        <a href="{{ route('adm.galeria.edit', $galeria->id) }}" class="card-link"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                                        <button type="button" class="btn btn-outline-danger card-link" data-bs-toggle="modal" data-bs-target="#excluir{{$galeria->id}}">Excluir</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="excluir{{$galeria->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Excluir Foto</h5>
                                        </div>
                                        <div class="modal-body">
                                            Tem certeza que deseja excluir esta foto?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form method="post" action="{{ route('adm.galeria.destroy', $galeria->id) }}">
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
