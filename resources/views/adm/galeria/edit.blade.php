@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Foto</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.galeria.update', $galeria->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <img src="{{url('storage/'.$galeria->image_src)}}" class="card-img-top" alt="...">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Selecione a Categoria (Galeria)</label>
                            <select class="form-select" name="galerias_categorias_id">
                                <option value="">Selecione a Categoria (Galeria)</option>
                                @foreach ($categorias as $key => $categoria)
                                    <option @if ($categoria->id == $galeria->galerias_categorias_id) selected @endif
                                        value="{{$categoria->id}}">
                                            {{$categoria->category}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input type="text" class="form-control" name="desc" placeholder="Opcional" value="{{$galeria->desc}}">
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Salvar</button>
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