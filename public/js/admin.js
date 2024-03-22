// Definir la función eliminarUsu fuera del evento DOMContentLoaded
function eliminarUsu(idU) {
    Swal.fire({
        title: "¡Aviso!",
        text: "¿Seguro que quieres eliminar a este cliente?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si"
    }).then((result) => {
        if (result.isConfirmed) {
            var csrf_token = document.querySelector("meta[name = 'csrf-token']").getAttribute('content');
            var formdata = new FormData();
            formdata.append('id', idU);
            formdata.append('_token', csrf_token);
            // Crear instancia de XMLHttpRequest
            var xhr = new XMLHttpRequest();
            
            // Configurar la solicitud
            xhr.open("POST", "/eliminarC", true);
            // xhr.setRequestHeader("Content-Type", "application/json");
            
            // Manejar la respuesta de la solicitud
            xhr.onload = function() {
                if (xhr.status === 200) {
                    Swal.fire({
                        title: "¡Eliminado!",
                        text: "¡El cliente ha sido eliminado!",
                        icon: "success"
                    }).then(() => {
                        // Realizar cualquier acción adicional después de eliminar, como recargar la página o actualizar la lista de clientes
                        window.location.reload(); // Recargar la página
                    });
                } else {
                    Swal.fire({
                        title: "Error",
                        text: "Hubo un error al intentar eliminar al cliente.",
                        icon: "error"
                    });
                }
            };
            
            // Manejar errores de red
            xhr.onerror = function() {
                console.error('Error de red al intentar eliminar al cliente.');
                Swal.fire({
                    title: "Error",
                    text: "Hubo un error de red al intentar eliminar al cliente.",
                    icon: "error"
                });
            };
            
            // Enviar la solicitud con el ID del usuario como cuerpo
            xhr.send(formdata);
        }
    });
}
function editarUsu(usuario, rol_id, sede_id) {
    var csrf_token = document.querySelector("meta[name='csrf-token']").getAttribute('content');
    document.getElementById('id').value = usuario.id;
    document.getElementById('nombre').value = usuario.name;
    document.getElementById('correo').value = usuario.email;
    document.getElementById('rol').value = rol_id;
    document.getElementById('sede').value = sede_id;
    document.getElementById('editarFormulario').style.display="block";
    document.getElementById('nuevoFormulario').style.display="none";
}
function enEdi(){
    var id = document.getElementById('id').value;
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var rol = document.getElementById('rol').value;
    var sede = document.getElementById('sede').value;
    var csrf_token = document.querySelector("meta[name = 'csrf-token']").getAttribute('content');
    var formData = new FormData();
    formData.append('id', id);
    formData.append('nombre', nombre);
    formData.append('correo', correo);
    formData.append('rol', rol);
    formData.append('sede', sede);
    formData.append('_token', csrf_token);
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', './editarC', true);
    xhr.send(formData);
    buscar();
}
function enNuevo(){
    var nombre = document.getElementById('nombre2').value;
    var correo = document.getElementById('correo2').value;
    var contra = document.getElementById('contra2').value;
    var rol = document.getElementById('rol2').value;
    var sede = document.getElementById('sede2').value;
    var csrf_token = document.querySelector("meta[name = 'csrf-token']").getAttribute('content');
    var formData = new FormData();
    formData.append('nombre', nombre);
    formData.append('correo', correo);
    formData.append('rol', rol);
    formData.append('sede', sede);
    formData.append('contra', contra);
    formData.append('_token', csrf_token);
    console.log(formData);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/nuevoC', true);
    xhr.onload = function(){
        if (xhr.status == 200) {
            console.log(JSON.parse(xhr.responseText));
        }
        else{
            console.log('no');
        }
    }
    xhr.send(formData);
    buscar();
}
function añadirU(){
    document.getElementById('nuevoFormulario').style.display="block";
    document.getElementById('editarFormulario').style.display="none";
}
function buscar() {
    var rolF = document.getElementById('rolF').value;
    var lupa = document.getElementById('lupa').value;
    var csrf_token = document.querySelector("meta[name='csrf-token']").getAttribute('content');
    
    // Crear objeto FormData y agregar los datos
    var formdata = new FormData();
    formdata.append('lupa', lupa);
    formdata.append('rolF', rolF);
    formdata.append('_token', csrf_token);
    
    // Crear instancia de XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurar la función de respuesta
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Actualizar el contenido de la tabla con la respuesta recibida
                document.getElementById('mostrarU').innerHTML = xhr.responseText;
            } else {
                // Manejar errores si es necesario
                console.error('Error al procesar la solicitud: ' + xhr.status);
            }
        }
    };

    // Establecer el método y la URL del request
    xhr.open("POST", "/buscarC", true);
    
    // Enviar el request con los datos del formulario
    xhr.send(formdata);
}
function cancelar(){
    document.getElementById('nuevoFormulario').style.display="none";
    document.getElementById('editarFormulario').style.display="none";
}
function reset(){
    document.getElementById('rolF').value='';
    document.getElementById('lupa').value='';
    buscar();
}
