@extends('layout')

@section('content')
	<h1 class="title">Create a New Lesson</h1>

	<form method="POST" action="/wselessons">
		{{ csrf_field() }}
		<div class="field">
		<label class="label" for="unit">Unit</label>

		<div class="control">
			<input type="text" class="input" name="unit" placeholder="unit" />
		</div>
	</div>

	<div class="field">
		<label class="label" for="lesson">Lesson</label>

		<div class="control">
			<input type="text" class="input" name="lesson" placeholder="lesson" />
		</div>
	</div>

	<div class="field">
		<label class="label" for="content">Content</label>

		<div class="control">
			<textarea name="content" class="textarea" ></textarea>
		</div>
	</div>

	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Create Lesson</button>
		</div>
	</div>
</form>
	</form>
@endsection