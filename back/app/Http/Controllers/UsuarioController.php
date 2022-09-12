<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller {

    private $estado = 400;
    private $datos = [];

    //registro de usuario
    public function RegistrarUsuario(Request $request) {
        global $estado, $datos;

        self::iniciarObjetoJSon();

        if ($request->json()) {
            $data = $request->json()->all();

            $usuario = new Usuario();

            $usuario->correo = $data["correo"];
            $usuario->clave = $data["clave"];
            $usuario->nombres = $data["nombres"];
            $usuario->apellidos = $data["apellidos"];
            $usuario->cargo = $data["cargo"]; //nombre del puesto
            $usuario->telefono = $data["telefono"];
            $usuario->estado = 1; //1 activo, 0 inactivo
            $usuario->rol = 0; //0 docentes, 1 secretaria, 2 gestor

            $usuario->external_usuario = Utilidades\UUID::v4();
            $usuario->save();

            self::estadoJson(200, true, 'La data se ha registrado con exito :)');
        } else {
            self::estadoJson(400, false, 'La data no tiene el formato adecuado');
        }

        return response()->json($datos, $estado);
    }

    private static function estadoJson($estadoPeticion, $satisfactorio, $mensaje) {
        global $estado, $datos;
        $estado = $estadoPeticion;
        $datos['sucess'] = $satisfactorio;
        $datos['mensaje'] = $mensaje;
    }

    private static function iniciarObjetoJSon() {
        global $datos;
        $datos['data'] = null;
        $datos['sucess'] = 'false';
        $datos['mensaje'] = '';
    }

    public static function IniciarSesion(Request $request) {
        if ($request->json()) {
            try {
                $data = $request->json()->all(); // recibo           

                $usuario = Usuario::where("correo", "=", $data["correo"])
                                ->where("clave", "=", $data["clave"])
                                ->where("estado", 1)->first(); // 1 activo

                if ($usuario) {
                    return response()->json(["correo" => $usuario->correo,
                                "external_id" => $usuario->external_usuario,
                                "nombres" => $usuario->nombres,
                                "apellidos" => $usuario->apellidos,
                                //"token" => base64_encode($usuario->external_id . '--' . $usuario->correo),
                                "mensaje" => "Operacion exitosa", "siglas" => "OE"], 200);
                } else {
                    return response()->json(["mensaje" => "Ningun dato encontrado", "siglas" => "NDE"], 203);
                }
            } catch (\Exception $exc) {
                return response()->json(["mensaje" => "Faltan Datos" + $exc, "siglas" => "FD"], 400);
            }
        } else {
            return response()->json(["mensaje" => "La data no tiene el formato deseado", "siglas" => "DNF"], 404);
        }
    }

}
