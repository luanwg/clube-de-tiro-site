@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Notícia</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.noticias.update', $noticia->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <img src="{{url('storage/'.$noticia->image)}}" class="card-img-top" alt="...">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Selecione a Foto</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Título</label>
                            <input class="form-control" type="text" name="title" value="{{$noticia->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input class="form-control" type="text" name="desc" value="{{$noticia->desc}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Selecione a Categoria</label>
                            <select class="form-select" name="noticias_categorias_id">
                                <option value="">Selecione a Categoria</option>
                                @foreach ($categorias as $key => $categoria)
                                    <option @if ($categoria->id == $noticia->noticias_categorias_id) selected @endif
                                        value="{{$categoria->id}}">
                                            {{$categoria->category}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <textarea id="text" class="block w-full mt-1 rounded-md" name="text" rows="3">{!!$noticia->text!!}</textarea>
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
@push('scripts')
    <script src="{{url ('assets/js/ckeditor5-35.3.0/ckeditor.js')}}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            ClassicEditor
                .create( document.querySelector( '#text' ) )
                .catch( error => {
                    console.error( error );
                } );
        });
        
    </script>
@endpush
@endsection