@extends('layouts.app')

@section('content')
	<h1>Breed new</h1>
	<div class="row">
		<form action="{{route('breeds.store')}}" method="POST">
		@csrf
		
			<label style="padding: 20px">Name</label>
			<input type="text" name="name" value="">
			<button type="submit">Creat</button>
		</form>

	</div>




@endsection
