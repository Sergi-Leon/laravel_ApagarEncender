<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function eliminarC(Request $request)
    {
        $usuario = User::find($request->id);
        
        if ($usuario) {
            $usuario->delete();
            return response()->json(['mensaje' => 'Usuario eliminado correctamente'], 200);
        } else {
            return response()->json(['mensaje' => 'El usuario no existe'], 404);
        }
    }

    public function buscarC(Request $request)
    {
        // Obtener los valores de los filtros
        $nombreFiltro = $request->lupa;
        $rolFiltro = $request->rolF;

        // Consulta de usuarios con filtrado por nombre y rol
        $usuarios = User::with('Rol', 'Sede')
        ->where(function($query) use ($nombreFiltro, $rolFiltro) {
            if (!empty($nombreFiltro)) {
                $query->where('name', 'like', '%' . $nombreFiltro . '%');
            }
            if (!empty($rolFiltro)) {
                $query->where('rol_id', $rolFiltro);
            }
        })
        ->get();
        
        // Inicializar la variable para almacenar las filas de la tabla
        $tablaUsuarios = '';

        // Construir las filas de la tabla con los datos de los usuarios
        foreach ($usuarios as $usuario) {
            $tablaUsuarios .= '<tr>';
            $tablaUsuarios .= '<td>' . $usuario->name . '</td>';
            $tablaUsuarios .= '<td>' . $usuario->email . '</td>';
            $tablaUsuarios .= '<td>' . ($usuario->rol ? $usuario->rol->nombre_rol : 'Sin rol') . '</td>'; // Verificar si el usuario tiene un rol
            $tablaUsuarios .= '<td>' . ($usuario->sede ? $usuario->sede->nombre_sede : 'Sin sede') . '</td>'; // Verificar si el usuario tiene una sede
            $tablaUsuarios .= "<td><button class='btn btn-danger eliminar-btn' onclick='eliminarUsu(" . $usuario->id .")'>Eliminar</button></td>";
            $tablaUsuarios .= "<td><button class='btn btn-primary editar-btn' onclick='editarUsu(" . json_encode($usuario) . ", " . $usuario->rol_id . ", " . $usuario->sede_id . ")'>Editar</button></td>";
            $tablaUsuarios .= '</tr>';
        }
        return $tablaUsuarios;
    }

    

    public function editarC(Request $request)
    {
        // Validación de datos
        $request->validate([
            'id' => 'required|integer|exists:users,id',
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:users,email,'.$request->id,
            'rol' => 'nullable|exists:tbl_roles,id',
            'sede' => 'nullable|exists:tbl_sedes,id',
        ]);

        // Actualizar usuario
        $usuario = User::findOrFail($request->id);
        $usuario->name = $request->nombre;
        $usuario->email = $request->correo;
        $usuario->rol_id = $request->rol;
        $usuario->sede_id = $request->sede;
        $usuario->save();

        return response()->json(['mensaje' => 'Usuario actualizado exitosamente'], 200);
    }

    public function nuevoC(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:users,email',
            'contra' => 'nullable|string',
            'rol' => 'nullable|exists:tbl_roles,id',
            'sede' => 'nullable|exists:tbl_sedes,id',
        ]);

        // Crear un nuevo usuario
        $usuario = new User();
        $usuario->name = $request->nombre;
        $usuario->email = $request->correo;
        $usuario->password = bcrypt($request->contra); // Encriptar la contraseña
        $usuario->rol_id = $request->rol;
        $usuario->sede_id = $request->sede;
        $usuario->save();

        // Retornar una respuesta JSON indicando el éxito
        return response()->json(['mensaje' => 'Usuario actualizado exitosamente'], 200);
    }
}
