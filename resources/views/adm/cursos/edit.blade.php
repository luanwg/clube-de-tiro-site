@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Curso</div>

                <div class="card-body">
                    <form method="post" action="{{ route('adm.cursos.update', ['curso' => $curso->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" name="name" value="{{$curso->name}}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">R$</span>
                            </div>
                            <input type="number" class="form-control" aria-label="Preço" name="price" value="{{$curso->price}}">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mini Descrição</label>
                            <input type="text" class="form-control" name="mini_desc" value="{{$curso->mini_desc}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição Completa</label><br>
                            <textarea name="full_desc" id="full_desc">{{$curso->full_desc}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Icone (<a href="https://simplelineicons.github.io/" target="_blank">Lista</a>)</label>
                            <input type="text" class="form-control" name="icon" value="{{$curso->icon}}">
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="{{url ('assets/js/ckeditor5-35.3.0/ckeditor.js')}}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            ClassicEditor
                .create( document.querySelector( '#full_desc' ) )
                .catch( error => {
                    console.error( error );
                } );
        });
        
    </script>
@endpush
@endsection