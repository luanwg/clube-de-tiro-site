@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Categoria</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.galeria-categoria.update', ['galeria_categorium' => $galeria_categorium->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <input type="text" class="form-control" name="category" value="{{$galeria_categorium->category}}">
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection