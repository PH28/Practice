@extends('layouts.app')

@section('content')
	<h1>Cat {{$cat->id}} edit</h1>
	<div class="row">
		<form action="{{route('cats.update', $cat->id)}}" method="POST">
		@csrf
		@method('PUT')
			<label style="padding: 20px">Name</label>
			<input type="text" name="name" value="{{$cat->name}}">
			<label style="padding: 20px">Breed ID</label>
			<select name="breed_id"> 
			@foreach ($breedIds as $key => $value)
				@if($key == $cat->breed_id )
			  <option value="{{$key}}" selected="seleted">{{$value}}</option>
			  @else
			  <option value="{{$key}}" >{{$value}}</option>
			  @endif
			@endforeach
			</select>
			<label style="padding: 20px">DoB</label>
			<input type="text" name="dob" value="{{$cat->dob}}">
			<button type="submit">Update</button>
		</form>

	</div>




@endsection
