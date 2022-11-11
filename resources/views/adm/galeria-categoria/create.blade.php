@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Adicionar Categoria</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.galeria-categoria.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <input type="text" class="form-control" name="category">
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
