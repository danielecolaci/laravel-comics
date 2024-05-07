<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}">

    @vite('resources/js/app.js')
</head>
<body>
    
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')


</body>
</html>