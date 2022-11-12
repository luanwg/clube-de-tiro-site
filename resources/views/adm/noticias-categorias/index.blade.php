@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Painel de Configurações - Notícias (Categoria)</div>

                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($categorias as $key => $categoria)
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$categoria->category}}</h5>
                                        <p class="card-text">Categoria: {{$categoria->noticias->count()}} notícias.</p>
                                        <a href="{{ route('adm.noticias-categorias.edit', $categoria->id) }}" class="card-link"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                                        <button type="button" class="btn btn-outline-danger card-link" data-bs-toggle="modal" data-bs-target="#excluir{{$categoria->id}}">Excluir</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="excluir{{$categoria->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Excluir Categoria</h5>
                                        </div>
                                        <div class="modal-body">
                                            Tem certeza que deseja excluir esta categoria?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form method="post" action="{{ route('adm.noticias-categorias.destroy', $categoria->id) }}">
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
<!-- Modal -->
<div class="modal fade" id="msg_erro" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Erro ao Excluir</h5>
            </div>
            <div class="modal-body">
                @error('erro')
                    {{$message}}
                @enderror
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    @error('erro')
        <script>
            document.addEventListener("DOMContentLoaded", function(e) {
                var myModal = new bootstrap.Modal(document.getElementById('msg_erro'));
                myModal.show();
            });
        </script>
    @enderror
@endpush
@endsection
