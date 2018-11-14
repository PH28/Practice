@extends('layouts.app')

@section('content')
	<h1>Breed {{$breed->id}} detail</h1>
	<table>
		<tr >
			<th > ID</th>
			<th > Name Breed</th>
			<th> Edit </th>
		</tr>
		<tr >

			<td >{{ $breed->id }}</td>
			<td >{{ $breed->name }}</td>
			<td> <a href="{{route('breeds.edit', $breed->id)}}">Edit</a></td>
		</tr>
	</table>



@endsection
