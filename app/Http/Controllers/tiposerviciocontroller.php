<?php

namespace App\Http\Controllers;
use App\tiposervicio;
use DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Validator;
use Illuminate\Support\Facades\Input;
class tiposerviciocontroller extends Controller
{
    public function index(Request $request){
        if($request->ajax()){
            $servicio=DB::select("SELECT * FROM tipo_servicio as tp WHERE tp.estado_servicio='Activo'");
            return Datatables::of($servicio)->make(true);
        }

        return view('Tiposervicio.servicio');
    }
    public function store(Request $request){
        $regla=[
            'tipo_Servicio'=>'required',
        ];
        $valida=Validator::make(Input::all(),$regla);
        if($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        }else{
            $servicio=new tiposervicio();
            $servicio->nombre_servicio=$request->tipo_Servicio;
            $servicio->estado_servicio=$request->estado;
            $servicio->save();


        }
        return response()->json(array("success"=>true));

    }
    public function edit($id){
        $data = tiposervicio::find($id);
        return response()->json($data);
    }
    public function update(Request $request,$id){
        $rules= [
            'tipo_Servicio' => 'required|min:2|max:32',
        ];
        $message = [
            'tipo_Servicio.required' => 'El nombre es Obligatorio.',
            'tipo_Servicio.min' => 'El nombre debe tener al menos 7 caracteres.',
            'tipo_Servicio.max' => 'El nombre no puede tener más de 32 caracteres.',
        ];
        $Validator = Validator::make(Input::all(),$rules,$message);
        if ($Validator->fails()) {
            return response()->json(array('errors' => $Validator->getMessageBag()->toArray()));
        }else{
            $servicios=tiposervicio::find($id);
            $servicios->nombre_servicio=$request->tipo_Servicio;
            $servicios->estado_servicio=$request->estado;
            $servicios->save();


        }
        return response()->json(array("success"=>true));

    }
    public function Eliminar($id){
        $servicio=tiposervicio::find($id);
        $servicio->delete();
        return response()->json(array("success"=>true));

    }

    public function inactivo(Request $request){
        if($request->ajax()){
            $servicio=DB::select("SELECT * FROM tipo_servicio as tp WHERE tp.estado_servicio='Inactivo'");
            return Datatables::of($servicio)->make(true);
        }

        return view('Tiposervicio.servicio');
    }
}
