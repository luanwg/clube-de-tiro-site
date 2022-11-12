@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Nova Notícia</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.noticias.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="1">
                        <div class="mb-3">
                            <label class="form-label">Selecione a Foto</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Título</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input class="form-control" type="text" name="desc">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Selecione a Categoria</label>
                            <select class="form-select" name="noticias_categorias_id">
                                <option selected value="">Selecione a Categoria</option>
                                @foreach ($categorias as $key => $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <textarea id="text" class="block w-full mt-1 rounded-md" name="text" rows="3"></textarea>
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
