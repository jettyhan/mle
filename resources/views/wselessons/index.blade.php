@extends('layout')

@section('content')

<div class="columns">
	<div class="column is-1">Unit</div>
	<div class="column is-1">Lesson</div>
	<div class="column">Points</div>
	<div class="column">Shen</div>
	<div class="column">Kae</div>
	<div class="column">Sofi</div>
</div>

@foreach ($lessons as $lesson)
<div class="columns">
  	<div class="column is-1">{{ $lesson->unit }}</div>
  	<div class="column is-1">{{ $lesson->lesson }}</div>
  	<div class="column">{{ $lesson->content }}</div>
</div>
@endforeach
	
@endsection