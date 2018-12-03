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
				<td><a data-id="{{$item->id}}" href="{{route('breeds.list_cats', $item->id)}}">{{ $item->name }}</a></td>
			</tr>
		@endforeach
	</table>


<div>
	<h1 id="abc">click me</h1>
	<div id="list-cat"></div>
</div>
<form method="POST" action="{{route('api.cats.store')}}">
	<label >Cat name</label>
	<input type="text" name="name" >
	<label >Breed id</label>
	<input type="text" name="breed_id" >
	<label >Dob</label>
	<input type="text" name="dob" >
	<button type="submit">Create</button>


</form>


@endsection

@section('script')
<script type="text/javascript">

$(document).ready(function() {
	// console.log($('#abc').text());
$("#abc").click(function (){
	$.ajax({
		url: '/api/cats',
		method: 'GET',
		data: {
			// name : 'cat-ajax',
			// breed_id : '1',
			// dob : '2018-10-10'
		},
		success: function(response){
			list_cats= response.data;
			html='<h1>List all Cat</h1><a href="">Create cat</a>'+
				'<table>'+
					'<tr>'+
						'<th> ID</th>'+
						'<th> Name</th>'+
						'<th> Breed Id</th>'+
						'<th> DoB</th>'+
					'</tr>';
			console.log(list_cats);	
			$.each(list_cats,function(index, value){
				html+='<tr>'+
						'<td>'+value.id+'</td>'+
						'<td>'+value.name+'</td>'+
						'<td>'+value.breed_id+'</td>'+
						'<td>'+value.dob+'</td>'+
					'</tr>';
			});
			html+='</table>';
			// console.log(html);
			$('#list-cat').append(html);
		},
		error: function(error){
			console.log(error);
		}

	});
});

// event for click on name breed

// $('a').click(function(e) {

// 	//remove html cũ
// 	$('#list-cat').html("");
// 	//get data-id
// 	var  breed_id= $(this).attr('data-id');
// 	e.preventDefault();
// 	$.ajax({
// 		url : 'api/breeds/'+breed_id+'/cats',
// 		method: 'GET',
// 		data : {},
// 		success : function(response) {
// 			html= '<h1>List all Cat by Breed Id</h1><a href="">Create cat</a>'+
// 				'<table>'+
// 					'<tr>'+
// 						'<th> ID</th>'+
// 						'<th> Name</th>'+
// 						'<th> Breed Id</th>'+
// 						'<th> DoB</th>'+
// 					'</tr>';
// 			$.each(response,function(index, value){
// 				// for (var i=0, i < response.length, i++) 
// 				html+='<tr>'+
// 						'<td>'+value.id+'</td>'+
// 						'<td>'+value.name+'</td>'+
// 						'<td>'+value.breed_id+'</td>'+
// 						'<td>'+value.dob+'</td>'+
// 					'</tr>';
// 			});
// 			html+='</table>';
// 			$('#list-cat').append(html);

// 		}

// 	});

// });

//event submit form 

$('button').click(function(e) {
	e.preventDefault();
	var cat_name= $("input[name='name']").val();
	var breed_id= $("input[name='breed_id']").val();
	var dob= $("input[name='dob']").val();
	// var url = $('form').attr('action');
	console.log(cat_name, breed_id, dob);
	$.ajax({
		url : 'api/cats',
		method: 'POST',
		data: {
			name : cat_name,
			breed_id: breed_id,
			dob: dob
		},
		success: function (response) {
			console.log(response);
			html= '<h1>Cat created</h1><a href="">Create cat</a>'+
				'<table>'+
					'<tr>'+
						'<th> ID</th>'+
						'<th> Name</th>'+
						'<th> Breed Id</th>'+
						'<th> DoB</th>'+
					'</tr>';
			// $.each(response.data,function(index, value){
				// for (var i=0, i < response.length, i++) 
				html+='<tr>'+
						'<td>'+response.data.id+'</td>'+
						'<td>'+response.data.name+'</td>'+
						'<td>'+response.data.breed_id+'</td>'+
						'<td>'+response.data.dob+'</td>'+
					'</tr>';
			// });
			html+='</table>';
			$('#list-cat').append(html);
		}

	})
});

});

	

</script>
@endsection
