@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Painel de Configurações - Cursos</div>

                <div class="card-body">
                    <div class="card-group">
                        @foreach ($cursos as $key => $curso)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$curso->name}}</h5>
                                    <p class="card-text">{{$curso->mini_desc}}</p>
                                    <a href="{{ route('adm.cursos.edit', $curso->id) }}" class="card-link"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                                    <button type="button" class="btn btn-outline-danger card-link" data-bs-toggle="modal" data-bs-target="#excluir{{$curso->id}}">Excluir</button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="excluir{{$curso->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Excluir Curso</h5>
                                        </div>
                                        <div class="modal-body">
                                            Tem certeza que deseja excluir este curso?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form method="post" action="{{ route('adm.cursos.destroy', $curso->id) }}">
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
