@extends('layouts.app')

@section('title', 'Familiar')

@section('content')

	<div class="row">
		@foreach($beloveds as $beloved)
			<div class="col-sm">
				<div class="card text-center" style="width: 18rem; margin-top: 70px;">
				  <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="img/{{$beloved->avatar}}" alt="">
				  <div class="card-body">
				    <h5 class="card-title">{{$beloved->name}} {{$beloved->lastname}}</h5>
                  <p class="card-text">{{$beloved->contact}}</p>
				    <a href="/beloved/{{$beloved->id}}" class="btn btn-primary">Ver más...</a>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
@endsection
