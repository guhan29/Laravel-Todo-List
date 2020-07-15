@extends('layouts.layout')

@section('content')
<h1 class="text-center mb-4">Update your todo</h1>
<form action="/todos/{{ $todo->id }}/update" method="post">
	@csrf
	<input type="text" class="form-control mb-3" name="todo_text" value="{{ $todo->todo_text }}">
	<input type="submit" class="btn btn-primary btn-block" value="Update">
</form>
@endsection