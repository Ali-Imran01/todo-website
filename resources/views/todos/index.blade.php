{{-- Use the base layout in resources/views/layouts/app.blade.php. --}}
@extends('layouts.app')

{{-- The browser tab title for this page. --}}
@section('title', 'My Todos')

{{-- Everything below is placed where the layout has @yield('content'). --}}
@section('content')
    <h1 class="mb-4">My Todos</h1>

    {{-- TODO 7: The "add todo" form.
                 - method POST, action = the store route. Hint: route('todos.store')
                 - Laravel rejects any POST form without @csrf. Find out why.
                 - One text input named "title" and a submit button.
                 - Show validation errors under the input.
                   Hint: @error('title') ... @enderror, and old('title') to keep what was typed.
                 - Bootstrap classes to look up: form-control, btn btn-primary, is-invalid, invalid-feedback --}}

    {{-- TODO 8: The list of todos.
                 - Loop over $todos. Hint: @forelse lets you handle the empty case too.
                 - Each row: the title, a way to mark it done/undone, an Edit link, and a Delete button.
                 - HTML forms can only send GET or POST. So how do you send DELETE or PATCH?
                   Hint: look up @method in the Blade docs.
                 - Bootstrap classes to look up: list-group, list-group-item, d-flex, btn-sm --}}
@endsection
