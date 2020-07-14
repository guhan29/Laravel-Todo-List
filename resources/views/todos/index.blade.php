@extends('layouts.layout')

@section('content')
<h1>Hello index</h1>
	<ul>
		@foreach($todos as $todo)
			<li>
				@if($todo->is_completed)
					<p><del>{{ $todo->todo_text }}</del></p>
				@else
					<p>{{ $todo->todo_text }}</p>
				@endif
				<div class="buttons">
					<a class="btn btn-success" href="#">Toggle</a>
					<a class="btn btn-info" href="#">Edit</a>
					<a class="btn btn-danger" href="#">Delete</a>
				</div>
			</li>
		@endforeach
	</ul>
@endsection