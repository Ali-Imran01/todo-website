<?php

use Illuminate\Support\Facades\Route;

// Temporary: shows the empty todo page so you can see that Bootstrap loads.
// Replace this in TODO 3.
Route::view('/', 'todos.index', ['todos' => []]);

// TODO 3: Register the routes for TodoController.
//         - One line can register all the routes at once. Hint: Route::resource
//         - The controller only has index, store, edit, update, destroy.
//           Register only those. Hint: ->only([...])
//         - Make "/" send the visitor to the todo list. Hint: Route::redirect
//         Check your work with: php artisan route:list
