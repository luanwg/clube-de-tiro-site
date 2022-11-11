@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Adicionar Fotos</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.galeria.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="1">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Selecione as Fotos</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple name="images[]">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Selecione a Categoria (Galeria)</label>
                            <select class="form-select" name="galerias_categorias_id">
                                <option selected value="">Selecione a Categoria (Galeria)</option>
                                @foreach ($categorias as $key => $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input type="text" class="form-control" name="desc" placeholder="Opcional">
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Cadastrar</button>
                    </form>
                </div>
                @if ($errors->any())
                    {{$errors}}
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
