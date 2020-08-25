<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Usuarios;


class UsuariosController extends BaseController
{

    public function listar()
    {
        $res = Usuarios:: where('eliminado', 0)
        ->get();

        if ($res != null){
            return response() -> json($res, 200);
        }else{
            return 'error';
        }
    }

    public function insertar(Request $request)
    {
        $res = array(
            'nombres' => $request['nombres'],
            'apellidos' => $request['apellidos'],
            'telefono' => $request['telefono'],
            'correo' => $request['correo'],
            'direccion' => $request['direccion'],
            'eliminado' => 0,
        );
        
         $respuesta = Usuarios:: insert($res);

        if ($respuesta != null){
            return $respuesta;
        }else{
            return 'error';
        }
    }
    

    public function actualizar(Request $request)
    {
        $id = $request['id'];

        $res = array(
            'nombres' => $request['nombres'],
            'apellidos' => $request['apellidos'],
            'telefono' => $request['telefono'],
            'correo' => $request['correo'],
            'direccion' => $request['direccion'],
            'eliminado' => $request['eliminado'],

        );
        
         $respuesta = Usuarios::findOrFail($id) -> update($res);

        if ($respuesta != null){
            return $respuesta;
        }else{
            return 'error';
        }
    }

    public function eliminar($id)
    {
        $res = array(
            'eliminado' => 1,
        );
        
         $respuesta = Usuarios::findOrFail($id) -> update($res);

        if ($respuesta != null){
            return $respuesta;
        }else{
            return 'error';
        }
    }

    public function consultar($id)
    {   
         $respuesta = Usuarios::where('id',$id)->first();

        if ($respuesta != null){
            return $respuesta;
        }else{
            return 'error';
        }
    }
 
}
