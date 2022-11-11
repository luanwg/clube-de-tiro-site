@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Calendario</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.calendario-evento.update', ['calendario_evento' => $calendario_evento->id]) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="user_id" value="1">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" name="name" value="{{$calendario_evento->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cor</label>
                            <input name="color" type="color" class="form-control form-control-color" value="{{$calendario_evento->color}}" title="Escolha a Cor">
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection