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
                $("#str_telefone_fixo").mask("(00) 0000-0000");
                $("#str_telefone_celular").mask("(00) 00000-0000");
            });

            function validarCPF(cpf) {
                console.log('tesre');
                	
                cpf = cpf.value.replace(/[^\d]+/g,'');	
                if(cpf == '') return false;	
                // Elimina CPFs invalidos conhecidos	
                if (cpf.length != 11 || 
                    cpf == "00000000000" || 
                    cpf == "11111111111" || 
                    cpf == "22222222222" || 
                    cpf == "33333333333" || 
                    cpf == "44444444444" || 
                    cpf == "55555555555" || 
                    cpf == "66666666666" || 
                    cpf == "77777777777" || 
                    cpf == "88888888888" || 
                    cpf == "99999999999"){
                        document.getElementById('cpfInvalido').style.display = 'block';		
                        document.getElementById('buttonEnviar').style.display = 'none';		
                        return false;		
                    }
                // Valida 1o digito	
                add = 0;	
                for (i=0; i < 9; i ++)		
                    add += parseInt(cpf.charAt(i)) * (10 - i);	
                    rev = 11 - (add % 11);	
                    if (rev == 10 || rev == 11)		
                        rev = 0;	
                    if (rev != parseInt(cpf.charAt(9))){
                        document.getElementById('cpfInvalido').style.display = 'block';		
                        document.getElementById('buttonEnviar').style.display = 'none';		
                        return false;
                    }
                // Valida 2o digito	
                add = 0;	
                for (i = 0; i < 10; i ++)		
                    add += parseInt(cpf.charAt(i)) * (11 - i);	
                rev = 11 - (add % 11);	
                if (rev == 10 || rev == 11)	
                    rev = 0;	
                if (rev != parseInt(cpf.charAt(10))){
                    document.getElementById('cpfInvalido').style.display = 'block';		
                    document.getElementById('buttonEnviar').style.display = 'none';
                    return false;		
                }

                document.getElementById('cpfInvalido').style.display = 'none';		
                document.getElementById('buttonEnviar').style.display = 'block';
                return true;   
            }

        </script>
    </body>
</html>
