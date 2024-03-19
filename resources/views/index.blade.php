<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolveNow</title>
    <link rel="shortcut icon" href={{ asset('img/icon.png')}} type="image/x-icon">
    <link rel="stylesheet" href={{ asset('css/style.css')}}>
</head>
<body>
    <section class="">
        <header class="flex">
            <div>
            <img class="logo" src="">
            </div>
        </header>
        <form action="{{ route('login.submit') }}" method="POST" id="loginForm" onsubmit="return validarFormulario()">
            @csrf
            <div class="flex" id="oscuro">
                <div class="container row">
                    <div class="column-2-izq flex">
                        <img class="logo" src={{ asset('img/icon.png')}} alt="">
                    </div>
                    <div class="column-2-der" style='margin-top: 6%;'>
                        <h2 id="titulo">Iniciar Sesión</h2>
                        <form>
                            <div class="inputs">
                                <input type="text"  maxlength="50" id="email" name="email" class="form-control" placeholder="Correo electrónico..." />
                                <p id="emailError" style="color: #06b20e; text-align: center;"></p>
                            </div>
                            <div class="inputs">
                                <input type="password"  maxlength="12" id="password" name="password" id="form2Example27" class="form-control" placeholder="Contraseña..."/>
                                <p id="passwordError" style="color: #06b20e; text-align: center;"></p>
                            </div>
                            <div>
                                @if(session('error'))
                                    <p style="color: #06b20e; text-align: center;">
                                        @if(session('error') == 'errorpwd')
                                            Correo o Contraseña incorrecta
                                        @endif
                                    </p>
                                @endif
                            </div>
                            <div class="flex">
                                <input type="hidden" id="hiddenUsername" name="hiddenUsername">
                                <input type="submit" class="boton" name="inicio" value="Iniciar sesión">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>