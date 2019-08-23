@extends('layout')

@section('content')
	<table>
	@foreach ($lessons as $lesson)
		<tr>
			<td>{{ $lesson->unit }}</td>
			<td>{{ $lesson->lesson }}</td>
			<td>{{ $lesson->content }}</td>
		</tr>
	@endforeach
	</table>
	
@endsection