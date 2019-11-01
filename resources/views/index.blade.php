<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    </head>
    <body>

        <div class="container" style="margin-top: 5%;">
            @yield('content')
        </div>

        <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mask.js') }}"></script>

        <script>
            $(document).ready(function(){
                $("#inputCpf").mask("000.000.000-00");
                $("#str_cep").mask("00000-000");
                $("#str_telefone_fixo").mask("(00) 0000-0000");
                $("#str_telefone_celular").mask("(00) 00000-0000");
            });
        </script>
    </body>
</html>
