@extends('layouts.app')
@extends('layouts.scripts')
@section('title', 'Ubicacion')

@section('content')
<div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-center">Prueba de Localizacion</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <button class="btn btn-primary" onclick="tryGeolocation()">Enviar Ubicacion</button>
                        <p id="demo"></p>
                    </div>
            </div>
        </div>
    </div>
    
@endsection
