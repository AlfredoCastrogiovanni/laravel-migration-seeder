<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title','Laravel App Title')</title>
        <!-- FontAwesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
        
        @vite('resources/js/app.js')

        @yield('head-content')
    </head>
    <body>
        @include('layouts.partials.header')

        <main>
            @yield('main-content')
        </main>

        @include('layouts.partials.footer')
    </body>
</html>