@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Adicionar Evento (Categoria)</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.calendario-evento.store') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="1">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cor</label>
                            <input name="color" type="color" class="form-control form-control-color" value="#563d7c" title="Escolha a Cor">
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
