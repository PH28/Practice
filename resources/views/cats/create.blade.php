@extends('layouts.app')

@section('content')
	<h1>CAt new</h1>
	<div class="row">
		<form action="{{route('cats.store')}}" method="POST">
		@csrf
			<label style="padding: 20px">Name</label>
			<input type="text" name="name" value="{{old('name')}}">
			@if( $errors->has('name'))
			<span>{{$errors->first('name')}}</span>
			@endif
			<label style="padding: 20px">Breed ID</label>
			<select name="breed_id"> 
			@foreach ($breedIds as $key => $value)
			  <option value="{{$key}}">{{$value}}</option>
			@endforeach
			</select>
			<label style="padding: 20px">DoB</label>
			<input type="text" name="dob" value="{{old('dob')}}">
			@if( $errors->has('dob'))
			<span>{{$errors->first('dob')}}</span>
			@endif
			<button type="submit">Create</button>
		</form>

	</div>




@endsection
