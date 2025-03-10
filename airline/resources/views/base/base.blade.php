<!DOCTYPE html>
<html>
    <head>
        <title>Flights</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="dark dark:bg-gray-500 flex flex-col min-h-screen">

        @include('includes.navbar')

        <div class="">
            @yield('content')
        </div>

        @include('includes.footer')

    </body>
</html>

