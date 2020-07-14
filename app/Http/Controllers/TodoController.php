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

    public function edit() {
    	return view('todos.edit');
    }
}
