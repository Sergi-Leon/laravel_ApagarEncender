<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Sede</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody id="mostrarU">
                <?php
                    use App\Models\User;
                    $usuarios = User::with('Rol', 'Sede')->get();

                    foreach ($usuarios as $usuario) {
                        echo "<tr>";
                        echo "<td>" . $usuario->name . "</td>";
                        echo "<td>" . $usuario->email . "</td>";
                        echo "<td>" . ($usuario->rol ? $usuario->rol->nombre_rol : 'Sin rol') . "</td>"; // Verificar si el usuario tiene un rol
                        echo "<td>" . ($usuario->sede ? $usuario->sede->nombre_sede : 'Sin sede') . "</td>"; // Verificar si el usuario tiene una sede
                        echo "<td><button class='btn btn-danger eliminar-btn' onclick='eliminarUsu(" . $usuario->id .")'>Eliminar</button></td>";
                        echo "<td><button class='btn btn-primary editar-btn' onclick='editarUsu(" . json_encode($usuario) . ", " . $usuario->rol_id . ", " . $usuario->sede_id . ")'>Editar</button></td>";
                        echo "</tr>";
                    }

                ?>
            </tbody>
       </table>
    </div>
    <div id="editarFormulario" style="display: none;">
        <h2>Editar Usuario</h2>
        <form id="formularioEditar">
            <input type="text" id="id" style="display: none">
            <div class="form-group">
                <label for="nombre">Nombre de usuario:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="correo">Correo electrÃ³nico:</label>
                <input type="email" class="form-control" id="correo" name="correo">
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <select class="form-control" id="rol" name="rol">
                    <?php
                        use App\Models\Rol;
                        $roles = Rol::all();
                        foreach ($roles as $rol) {
                            echo "<option value='" . $rol->id . "'>" . $rol->nombre_rol . "</option>";
                        }
                    ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="sede">Sede:</label>
                <select class="form-control" id="sede" name="sede">
                    <?php
                        use App\Models\Sede;
                        $roles = Sede::all();
                        foreach ($roles as $rol) {
                            echo "<option value='" . $rol->id . "'>" . $rol->nombre_sede . "</option>";
                        }
                    ?>
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="enEdi()">Guardar cambios</button>
        </form>
    </div>
</body>
</html>
<!-- Agregar los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Agregar SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Agregar script de evento en JavaScript -->
<script src={{ asset('js/admin.js')}}></script>