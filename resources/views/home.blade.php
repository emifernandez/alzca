@extends('layouts.app')

@section('content')

<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-lg-12"> --}}
            {{-- <div class="card"> --}}
                {{-- <div class="card-header text-center">Inicio</div> --}}

                {{-- <div class="card-body"> --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="img/alzca-logo.png" alt="" style="display: block;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 20%;">
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div>
    </div> --}}
</div>
@endsection
