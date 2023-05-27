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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
