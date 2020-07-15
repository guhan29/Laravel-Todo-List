@extends('layouts.layout')

@section('content')
	<h1 class="text-center mb-5">Todo List</h1>
	@if(count($todos) != 0)
		<ul class="list-group">
			@foreach($todos as $todo)
					@if($todo->is_completed)
						<li class="list-group-item list-group-item-success">
						<p><del>{{ $todo->todo_text }}</del></p>
					@else
						<li class="list-group-item">
						<p>{{ $todo->todo_text }}</p>
					@endif
					<div class="buttons">
						<a class="btn btn-success" href="/todos/{{ $todo->id }}/toggle">Toggle</a>
						<a class="btn btn-info ml-2" href="/todos/{{ $todo->id }}/edit">Edit</a>
						<a class="btn btn-danger ml-2" href="/todos/{{ $todo->id }}/delete">Delete</a>
					</div>
				</li>
			@endforeach
		</ul>
		<div class="bottom-btn">
			<a href="/todos/toggle_all" class="btn btn-success">Toggle All</a>
			<a href="/todos/delete_completed" class="btn btn-warning">Delete Completed</a>
			<a href="/todos/delete_all" class="btn btn-danger">Delete All</a>
		</div>
	@else
		<center><span class="alert alert-info">Your todo list is empty</span></center>
	@endif
@endsection