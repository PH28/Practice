@extends('layouts.app')

@section('content')

	<h1>List all Breed</h1>
	<a href="{{route('breeds.create')}}">Create Breed</a>
	<table>
		<tr>
			<th> ID</th>
			<th> Name</th>
		</tr>
		@foreach( $breeds as $item)
			<tr>

				<td>{{ $item->id }}</td>
				<td><a href="{{route('breeds.list_cats', $item->id)}}">{{ $item->name }}</a></td>
			</tr>
		@endforeach
	</table>



@endsection
