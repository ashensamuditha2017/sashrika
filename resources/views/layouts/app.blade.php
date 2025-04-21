<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>සශ්‍රීක | Sashrika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('static/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .container {
            padding-bottom: 80px; /* Adjust this value as needed */
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @if (auth()->check() && Route::currentRouteName() !== 'login' && Route::currentRouteName() !== 'register' && Route::currentRouteName() !== 'welcome')
        @php
            $userRole = auth()->user()->role; // Assuming your User model has a 'role' attribute
        @endphp

        @if ($userRole === 'farmer')
            <x-farmer-bottom-nav />
        @elseif ($userRole === 'officer')
            <x-officer-bottom-nav />
        @else
            <x-bottom-nav /> 
        @endif
    @endif
    <script src="..."></script>
</body>
</html>