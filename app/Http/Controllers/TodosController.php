<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodosController extends Controller {

  public function index() {

    // fetch all todos from database
    //display in todos.index page

    return view('todos.index')->with('todos', Todo::all());
  }

  public function show($todoId) {

    //$todo = Todo::find($todoId);

    return view('todos.show')->with('todo', Todo::find($todoId));
  }
}
