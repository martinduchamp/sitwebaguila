<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/simplex/bootstrap.min.css" integrity="sha512-9BNt00AjhUkiAd7u/l73pzR296z2X5DtAE58kbo8cwJaZaLCOdh8ULfXD3O6B1SHf/5MJw1kJsxL8QQXIbGdKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        @include('aplicacion.navbar')
        <br>
        <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>
