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

  public function create() {
    return view('todos.create');
  }

  public function store() {
    $data = request()->all(); //gets all the data from the submitted form. It's using the request() function to retrieve the data that was sent as part of the HTTP request.

    $todo              = new Todo(); // Create a new Todo object
    $todo->name        = $data['name']; // Set the 'name' attribute of the Todo object
    $todo->description = $data['description']; // Set the 'description' attribute of the Todo object
    $todo->completed   = false; // Set the 'completed' attribute of the Todo object to false

    $todo->save(); // Save the Todo object to the database

    return redirect('/todos'); // Redirect to the 'todos' page after saving
  }
}
