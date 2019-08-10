@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu Correo Electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo link de verificación ha sido enviado a tu correo electrónico') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, por favor verifica en tu correo electrónico un link de verificació') }}
                    {{ __('Si no ha recibido el correo electrónico') }}, <a href="{{ route('verification.resend') }}">{{ __('haga click aquí para solicitar otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
