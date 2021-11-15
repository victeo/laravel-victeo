<!DOCTYPE html>
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


    @yield('estilopersonalizar')

</head>

<body @yield('body_mudar')>

    @yield('navbar')

    @yield('banner')


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- estilos sgv -->

    @yield('footer')
</body>

</html>
