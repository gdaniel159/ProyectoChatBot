<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>
        {{-- Para extender una estructura para el uso en distintas vistas, deberia especificar de la siguiente forma la seccion --}}
        @yield('title')
    </title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('layouts._partials.menu')
    <main>
        @yield('content')
    </main>
    @include('layouts._partials.footer')
</body>
</html>