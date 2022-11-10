@extends('adm.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Painel de Configurações - Sobre</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('adm.sobre.update', $sobre[0]->id) }}">
                        @csrf
                        @method('PUT')
                        <textarea id="sobre" class="block w-full mt-1 rounded-md" name="sobre" rows="3">{!!$sobre[0]->sobre!!}</textarea>
                        <br>
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
                .create( document.querySelector( '#sobre' ) )
                .catch( error => {
                    console.error( error );
                } );
        });
        
    </script>
@endpush
@endsection
