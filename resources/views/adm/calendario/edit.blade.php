@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Calendario</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.calendario.update', ['calendario' => $calendario->id]) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="user_id" value="1">
                        <div class="mb-3">
                            <label class="form-label">Título</label>
                            <input type="text" class="form-control" name="title" value="{{$calendario->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Início</label>
                            <input type="datetime-local" class="form-control" name="starting_at" value="{{$calendario->starting_at->format('Y-m-d H:i')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fim</label>
                            <input type="datetime-local" class="form-control" name="ending_at" value="{{$calendario->ending_at->format('Y-m-d H:i')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Selecione o Evento (Categoria)</label>
                            <select class="form-select" name="calendario_eventos_id">
                                <option value="">Selecione o Evento (Categoria)</option>
                                @foreach ($calendario_eventos as $key => $calendario_evento)
                                    <option @if ($calendario_evento->id == $calendario->calendario_eventos_id) selected @endif
                                        value="{{$calendario_evento->id}}"
                                        style="background: {{$calendario_evento->color}}">
                                            {{$calendario_evento->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection