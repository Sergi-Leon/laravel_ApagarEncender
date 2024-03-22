<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Crear Incidencia</title>
    <!-- Incluir estilos de Bulma desde el CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @font-face {
            font-family: 'Gotham';
            src: url('../fonts/Gotham-Bold.ttf') format('truetype'),
                url('../fonts/Gotham-Medium.ttf') format('truetype'),
                url('../fonts/Gotham-Light.ttf') format('truetype');
            /* Puedes agregar más variantes de la fuente según sea necesario */
        }

        /* Estilo predeterminado para todo el documento */
        body {
            font-family: 'Gotham', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Estilos para el contenedor principal de la aplicación */
        .crud {
            margin-top: 50px;
            /* Se ajustó el margen superior */
            margin-left: 5%;
            /* Se redujo el margen izquierdo */
            overflow: hidden;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
        }

        /* Estilos para el formulario */
        .formulario {
            width: 30%;
            background-color: #f2f2f2;
            padding: 20px;
        }

        /* Estilos para la tabla responsiva */
        .table-responsive {
            width: 45%;
        }

        /* Estilos adicionales para pantallas pequeñas */
        @media only screen and (max-width: 1000px) {
            .table-responsive {
                width: 70%;
            }

            .crud {
                margin-left: 2%;
            }
        }
    </style>
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Nueva Incidencia</h1>
            <form action="" method="POST" class="crud">
                @csrf
                <div class="formulario">
                    <div class="field">
                        <label class="label">Categoría</label>
                        <div class="control has-icons-left">
                            <div class="select">
                                <select name="categoria">
                                    <option selected>Red</option>
                                    <option>Hardware</option>
                                    <option>Software</option>
                                </select>
                            </div>
                            <span class="icon is-small is-left">
                                <i class="fas fa-pen"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Subcategoría</label>
                        <div class="control">
                            <input class="input" type="text" name="subcategoria" placeholder="Ingrese la subcategoría">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Comentario del Cliente</label>
                        <div class="control">
                            <textarea class="textarea" name="comentario" placeholder="Ingrese el comentario del cliente"></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-primary" type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>