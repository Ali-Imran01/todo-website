{{-- The base page layout that every page extends. --}}
<!DOCTYPE html>
{{-- Set the page language from config/app.php (e.g. "en"). --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Use UTF-8 so every character displays correctly. --}}
    <meta charset="utf-8">
    {{-- Make the page fit phone screens instead of zooming out. --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Tab title: the page's own @section('title'), or "Todo" if it has none. --}}
    <title>@yield('title', 'Todo')</title>
    {{-- Load Bootstrap CSS and JS through Vite. --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{-- Light grey background so the white cards stand out. --}}
<body class="bg-light">
    {{-- A centred, narrow column with vertical padding. --}}
    <main class="container py-5" style="max-width: 640px;">

        {{-- TODO 9: Show a success message here after add/update/delete.
                     Hint: the controller can redirect()->with('status', '...'),
                     and here you read it with session('status').
                     Bootstrap class to look up: "alert alert-success". --}}

        {{-- Each page's main content goes here. --}}
        @yield('content')
    </main>
</body>
</html>
