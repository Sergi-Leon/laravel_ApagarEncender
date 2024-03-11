document.addEventListener("DOMContentLoaded", function() {
    var emailField = document.getElementById('email');
    var passwordField = document.getElementById('password');
    var emailError = document.getElementById('emailError');
    var contrasenaError = document.getElementById('passwordError');

    const patronEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; // Formato de email
    const patronContrasena = /^(?=.*\d)(?=.*[A-Z])[0-9a-zA-Z]{8,}$/; // Al menos 1 número, 1 mayúscula, mínimo 8 caracteres

    function validarFormulario() {
        var mal=false;
        const email = emailField.value.trim();
        const contrasena = passwordField.value.trim();

        // Restablecer los mensajes de error
        emailError.innerHTML = "";
        contrasenaError.innerHTML = "";

        // Validaciones email
        if (email === "") {
            emailError.innerHTML = "Ingresa un correo electrónico.";
            mal=true;
        } else if (!patronEmail.test(email)) {
            emailError.innerHTML = "El email no es válido, debe estar escrito con la siguiente pauta: ejemplo@ejemplo.com";
            mal=true;
        }

        // Validaciones contraseña
        if (contrasena === "") {
            contrasenaError.innerHTML = "Ingresa una contraseña.";
            mal=true;
        } else if (!patronContrasena.test(contrasena)) {
            contrasenaError.innerHTML = "La contraseña debe tener al menos 1 número, 1 mayúscula y mínimo 8 caracteres.";
            mal=true;
        }
        if (mal==true){
            ejecutarFuncion();
        }

    }

    function ejecutarFuncion() {
        var emailEnviar = document.getElementById('email').value;
        var passwordEnviar = document.getElementById('password').value;
    
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "ruta/de/tu/controlador", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); // Manejar la respuesta del servidor
            } else {
                console.error(xhr.statusText); // Manejar errores si los hay
            }
        };
        xhr.send("email=" + encodeURIComponent(emailEnviar) + "&contra=" + encodeURIComponent(passwordEnviar));
    }    
    document.getElementById('log').addEventListener('click', validarFormulario);
});
