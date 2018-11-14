@extends('layouts.app')

@section('content')

	<h1>List all Cat</h1>
	<a href="{{route('cats.create')}}">Create cat</a>
	<table>
		<tr>
			<th> ID</th>
			<th> Name</th>
			<th> Breed Id</th>
			<th> DoB</th>
			<th> Action</th>
		</tr>
		@foreach( $cats as $item)
			<tr>

				<td>{{ $item->id }}</td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->breed_id }}</td>
				<td>{{ $item->dob }}</td>
				<td>
					<a href="{{route('cats.edit', $item->id)}}">edit</a>
					<form action="{{route('cats.destroy', $item->id)}}" method="POST">
					@csrf
					@method('DELETE')
						<button type="submit">Delete</button>
						
					</form>

				</td>
			</tr>
		@endforeach
	</table>



@endsection
