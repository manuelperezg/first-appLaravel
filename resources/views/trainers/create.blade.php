{{-- herando del layout app --}}
@extends('layouts.app')

@section('title','Trainers Create')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<form  method="POST" action="/trainers" enctype="multipart/form-data">
				{{-- @csrf --}}
					<div class="form-group">
						<label for="disabledTextInput">Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="nombre del entrenador pokemon">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
					<div class="form-group">
						<label for="disabledTextInput">Avatar</label>
						<input type="file" name="avatar" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary">Enviar</button>
				
			</form>
		</div>
	</div>
</div>
@endsection



