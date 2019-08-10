@extends('layouts.app')

@section('title', 'Ubicacion')

@section('content')
    <button class="btn btn-primary" onclick="getLocation()">Enviar Ubicacion</button>
    <p id="demo"></p>
@endsection