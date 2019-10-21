@extends('layouts.app')

@section('title', 'Familiar')

@section('content')
<div class="card text-center">
    <div class="card-header">
      Familiar
    </div>
    <div class="card-body">
        <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/img/{{$beloved->avatar}}" alt="">
        <h2 class="card-title">{{$beloved->name}} {{$beloved->lastname}}</h2>
        <p class="card-text"><strong>Fase de Alzheimer:</strong> {{$beloved->phase}}</p>
        <p class="card-text"><strong>Descripción:</strong> {{$beloved->description}}</p>
        <p class="card-text"><strong>Contacto:</strong> {{$beloved->contact_name}}</p>
        <p class="card-text"><strong>Teléfono:</strong> {{$beloved->contact_phone}}</p>
        <p class="card-text"><strong>Dirección:</strong> {{$beloved->address}}</p>
        <a href="/map" class="btn btn-primary">Ver Ubicación</a>
    </div>
    <div class="card-footer text-muted">
    </div>
  </div>
@endsection
