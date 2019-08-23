@extends('layout')

@section('content')
<h1 class="title">Edit Lesson</h1>

<form>
	<div class="field">
		<label class="label" for="unit">Unit</label>

		<div class="control">
			<input type="text" class="input" name="unit" placeholder="unit" value="{{ $lesson->unit }}" />
		</div>
	</div>

	<div class="field">
		<label class="label" for="lesson">Lesson</label>

		<div class="control">
			<input type="text" class="input" name="lesson" placeholder="lesson" value="{{ $lesson->lesson }}" />
		</div>
	</div>

	<div class="field">
		<label class="label" for="content">Content</label>

		<div class="control">
			<textarea name="content" class="textarea" value="{{ $lesson->content }}" ></textarea>
		</div>
	</div>

	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Update Lesson</button>
		</div>
	</div>
</form>

<form>
	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Delete Lesson</button>
		</div>
	</div>
</form>
@endsection