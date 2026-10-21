{{-- Use the base layout in resources/views/layouts/app.blade.php. --}}
@extends('layouts.app')

{{-- The browser tab title for this page. --}}
@section('title', 'Edit Todo')

{{-- Everything below is placed where the layout has @yield('content'). --}}
@section('content')
    <h1 class="mb-4">Edit Todo</h1>

    {{-- TODO 10: A form to rename the todo.
                  - Which route, which HTTP method? (Check: php artisan route:list)
                  - Pre-fill the input with the current title.
                    Bonus: if validation fails, show what the user typed, not the old title.
                    Hint: old('title', $todo->title)
                  - A "Cancel" link back to the list. --}}
@endsection
