<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Laravel</title>

        <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css">

        @yield('header')
    
    </head>
    <body>
    
        @yield('content')

        @yield('footer')

    </body>
</html>