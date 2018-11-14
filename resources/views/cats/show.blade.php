@extends('layouts.app')

@section('content')
	<h1>Cat {{$cat->id}} detail</h1>
	<table>
		<tr >
			<th > ID</th>
			<th > Name Cat</th>
			<th > Breed ID</th>
			<th > DoB</th>
		</tr>
		<tr >

			<td >{{ $cat->id }}</td>
			<td >{{ $cat->name }}</td>
			<td >{{ $cat->breed_id }}</td>
			<td >{{ $cat->dob }}</td>
		</tr>
	</table>




@endsection
