@extends('layout')

@section('content')
	<h1>Create a New Lesson</h1>

	<form method="POST" action="/wselessons">
		{{ csrf_field() }}
		<div>
			<input type="text" name="unit" placeholder="unit"/>
		</div>

		<div>
			<input type="text" name="lesson" placeholder="lesson"/>
		</div>

		<div>
			<textarea name="content" placeholder="content"></textarea>
		</div>

		<div>
			<button type="submit">Create a Lesson</button>
	</form>
@endsection