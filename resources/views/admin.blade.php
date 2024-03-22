<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- You can add other navbar items here -->
            </ul>
            <button class="btn btn-primary my-2 my-sm-0 ml-2" onclick="añadirU()" type="button">Añadir</button>
        </div>
    </nav>
    <div id="editarFormulario" style="display: none;" class="form">
        <h2>Editar Usuario</h2>
        <form id="formularioEditar">
            <input type="text" id="id" style="display: none">
            <div class="form-group">
                <label for="nombre">Nombre de usuario:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
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
            <button type="button" class="btn btn-danger" onclick="cancelar()">Cancelar</button>
        </form>
    </div>
    <div id="nuevoFormulario" style="display: none;" class="form">
        <h2>Añadir Usuario</h2>
        <form id="formularioCrear">
            <div class="form-group">
                <label for="nombre">Nombre de usuario:</label>
                <input type="text" class="form-control" id="nombre2" name="nombre2">
            </div>
            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo2" name="correo2">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="contra2" name="contra2">
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <select class="form-control" id="rol2" name="rol2">
                    <option value="">escoge rol</option>
                    <?php
                        $roles = Rol::all();
                        foreach ($roles as $rol) {
                            echo "<option value='" . $rol->id . "'>" . $rol->nombre_rol . "</option>";
                        }
                    ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="sede">Sede:</label>
                <select class="form-control" id="sede2" name="sede2">
                    <option value="">escoge sede</option>
                    <?php
                        $roles = Sede::all();
                        foreach ($roles as $rol) {
                            echo "<option value='" . $rol->id . "'>" . $rol->nombre_sede . "</option>";
                        }
                    ?>
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="enNuevo()">Guardar cambios</button>
            <button type="button" class="btn btn-danger" onclick="cancelar()">Cancelar</button>
        </form>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="form-inline">
                    <select name="rolF" id="rolF" class="form-control mr-sm-2" aria-label="Search">
                        <option value="">escoge un rol</option>
                        <?php
                            $roles = Rol::all();
                            foreach ($roles as $rol) {
                                echo "<option value='" . $rol->id . "'>" . $rol->nombre_rol . "</option>";
                            }
                        ?>
                    </select>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="lupa">
                    <button class="btn btn-outline-success my-2 my-sm-2" type="button" onclick="buscar()">Search</button>
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="button" onclick="reset()">Reset</button>
                </form>
            </div>
        </div>
    </div>
    <br>
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