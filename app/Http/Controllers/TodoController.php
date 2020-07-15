<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{
    public function index() {
    	$todos = Todo::all();
    	// dd($todos);
    	// $todos = Todo::orderBy('id', asc)->get();
    	return view('todos.index', ['todos' => $todos]);
    }

    public function edit($id) {
    	$todo = Todo::findOrFail($id);
    	return view('todos.edit', ['todo' => $todo]);
    }

    public function update($id) {
    	$todo = Todo::findOrFail($id);
    	$todo->todo_text = request('todo_text');
    	$todo->save();
    	return redirect('/todos');
    }

    public function toggle($id) {
    	$todo = Todo::findOrFail($id);
    	$todo->is_completed = !$todo->is_completed;
    	$todo->save();
    	return redirect('/todos');
    }

    public function delete($id) {
    	$todo = Todo::findOrFail($id);
    	$todo->delete();
    	return redirect('/todos');
    }

    public function delete_completed() {
    	Todo::where('is_completed', true)->delete();
    	return redirect('/todos');
    }

    public function delete_all() {
    	Todo::query()->truncate();
    	return redirect('/todos');
    }

    public function toggle_all() {
    	$todos = Todo::all();
    	$completd = Todo::where('is_completed', true)->get();
    	if(count($todos) == count($completd)) {
    		Todo::where('is_completed', true)->update(['is_completed' => false]);
    	} else {
    		Todo::where('is_completed', false)->update(['is_completed' => true]);
    	}
    	return redirect('/todos');
    }

    public function create() {
    	$todo = new Todo();
    	$todo->todo_text = request('todo_text');
    	$todo->save();
    	return redirect('/todos');
    }
}
