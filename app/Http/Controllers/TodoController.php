<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;

class TodoController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $todos = Todo::all();
        return view( 'todo.index', compact( 'todos' ) );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view( 'todo.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( StoreTodoRequest $request ) {
        // dd($request->status);
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        // dd($request->status);
        $todo->status = $request->status == 1 ? "Completed" : "Not Completed";
        $todo->save();
        return redirect( route( "todos.index" ) )->with( 'success', 'Todo created successfully.' );
    }

    /**
     * Display the specified resource.
     */
    public function show( Todo $todo ) {
        return view( 'todo.details', compact( 'todo' ) );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Todo $todo ) {
        return view( 'todo.edit', compact( 'todo' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateTodoRequest $request, Todo $todo ) {
        $todo = Todo::find( $todo->id );

        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->status = $request->status == 1 ? "Completed" : "Not Completed";
        $todo->save();
        return redirect( route( "todos.index" ) )->with( 'success', 'Todo updated successfully.' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Todo $todo ) {
        Todo::find( $todo->id )->delete();
        return redirect( route( "todos.index" ) )->with( 'success', 'Todo deleted successfully.' );
    }
}
