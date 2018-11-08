@extends('layouts.app')

@section('content')

	<table>
		<tr>
			<th> ID</th>
			<th> Name</th>
		</tr>
		@foreach( $breeds as $item)
			<tr>

				<td>{{ $item->id }}</td>
				<td>{{ $item->name }}</td>
			</tr>
		@endforeach
	</table>



@endsection
