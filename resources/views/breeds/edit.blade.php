@extends('layouts.app')

@section('content')
	<h1>Breed {{$breed->id}} edit</h1>
	<div class="row">
		<form action="{{route('breeds.update', $breed->id)}}" method="POST">
		@csrf
		@method('PUT')
			<label style="padding: 20px">Name</label>
			<input type="text" name="name" value="{{$breed->name}}">
			<button type="submit">Update</button>
		</form>

	</div>




@endsection
