<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodosController extends Controller {

  public function index() {

    // fetch all todos from database
    //display in todos.index page

    return view('todos.index')->with('todos', Todo::all());
  }

  public function show(Todo $todo) {

    //$todo = Todo::find($todoId);
    return view('todos.show')->with('todo', $todo);
  }

  public function create() {
    return view('todos.create');
  }

  public function store() {

    $this->validate(request(), [ //erorr validator
      'name'        => 'required|min:6|max:12',
      'description' => 'required',
    ]);

    $data = request()->all(); //gets all the data from the submitted form. It's using the request() function to retrieve the data that was sent as part of the HTTP request.

    $todo              = new Todo(); // Create a new Todo object
    $todo->name        = $data['name']; // Set the 'name' attribute of the Todo object
    $todo->description = $data['description']; // Set the 'description' attribute of the Todo object
    $todo->completed   = false; // Set the 'completed' attribute of the Todo object to false

    $todo->save(); // Save the Todo object to the database

    return redirect('/todos'); // Redirect to the 'todos' page after saving
  }

  public function edit($todoId) {
    $todo = Todo::find($todoId);

    return view('todos.edit')->with('todo', $todo);
  }

  public function update(Todo $todo) {
    $this->validate(request(), [
      'name'        => 'required|min:6|max:12',
      'description' => 'required',
    ]);

    $data = request()->all();

    $todo->name        = $data['name'];
    $todo->description = $data['description'];

    $todo->save();

    return redirect('/todos');
  }

  public function destroy(Todo $todo) {
    $todo->delete();

    return redirect('/todos');
  }
}
