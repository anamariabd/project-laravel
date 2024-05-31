<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perfil;
use Illuminate\Routing\Controller as BaseController;


class PerfilController extends BaseController
{
    public function get(){
        try{
            $data = Perfil::get();
            return response()-> json($data, 200);
        } catch (\Throwable $th) {
            return response()-> json(['error' => $th->getMessage() ], 500);
        }
    }
    

    public function create(Request $request){
        try {
            $data['nombre'] = $request['nombre'];
            $data['apellidos'] = $request['apellidos'];
            $data['tipo_usuario'] = $request['tipo_usuario'];
            $data['usuario'] = $request['usuario'];
            $data['identificacion'] = $request['identificacion'];
            $data['password'] = $request['password'];
            $res = Perfil::create($data);
            return response()->json( $res, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    public function getById($id){
        try { 
            $data = Perfil::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    public function update(Request $request,$id){
        try { 
            $data['nombre'] = $request['nombre'];
            $data['apellidos'] = $request['apellidos'];
            $data['tipo_usuario'] = $request['tipo_usuario'];
            $data['usuario'] = $request['usuario'];
            $data['identificacion'] = $request['identificacion'];
            $data['password'] = $request['password'];
            Perfil::find($id)->update($data);
            $res = Perfil::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
  
    public function delete($id){
        try {       
            $res = Perfil::find($id)->delete(); 
            return response()->json([ "deleted" => $res ], 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
}
