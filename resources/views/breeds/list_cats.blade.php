@extends('layouts.app')

@section('content')
	<h1>List cat of breed id {{$breedId}}</h1>
	<table>
		<tr >
			<th > ID</th>
			<th > Name Cat</th>
			<th > Breed ID</th>
			<th > DoB</th>
		</tr>
		@foreach( $cats as $item)
			<tr >

				<td >{{ $item->id }}</td>
				<td >{{ $item->name }}</td>
				<td >{{ $item->breed_id }}</td>
				<td >{{ $item->dob }}</td>
			</tr>
		@endforeach
	</table>



@endsection
