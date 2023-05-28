<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/united/bootstrap.min.css" integrity="sha512-OcJVUFAaQ1kaFvQN/nsIoTSTdCyF7aVSpNv5BkqRm9DvMCM+9hndo+Lz8mfZ9Q6tPOn+tSXjZT3g+CSzFeUArA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        @include('aplicacion.navbar')
        <br>
        <div class="container">
            @yield('contenido')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
