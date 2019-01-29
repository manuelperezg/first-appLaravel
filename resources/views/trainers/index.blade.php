@extends('layouts.app')

@section('title','Trainers')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<p>Listado de entrenadores pokemon</p>

			<div class="card-columns">
			@foreach($trainers as $trainer)
				<div class="card">
					<img class="card-img-top" src="images/{{$trainer->avatar}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"> {{$trainer->name}}  </h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="#" class="btn btn-primary">Ver entrenador</a>
					</div>
				</div>
			@endforeach

			</div>
			

		</div>
	</div>
</div>

@endsection