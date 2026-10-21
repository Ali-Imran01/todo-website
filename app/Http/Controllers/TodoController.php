<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // TODO 4: Get all todos (newest first?) and pass them to
        //         the view resources/views/todos/index.blade.php as $todos.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // TODO 5: Validate first (is title required? max length?), then create the todo.
        //         Then redirect back to the list.
        //         Why redirect instead of returning a view after a POST?
        //         (Try refreshing the page after submitting and see what happens.)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        // TODO 6: Show resources/views/todos/edit.blade.php with this $todo.
        //         Notice $todo is already loaded from the URL. Why? (route model binding)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        // TODO 11: Validate, update, redirect.
        //          This one method will handle TWO kinds of request:
        //          renaming (edit page) and ticking done/undone (list page).
        //          How will you tell them apart? Or will you make a separate method?
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        // TODO 12: Delete it, then redirect back to the list.
    }
}
