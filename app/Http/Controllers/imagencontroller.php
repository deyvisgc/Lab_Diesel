<?php

namespace App\Http\Controllers;

use App\imagen;
use App\tiposervicio;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;
use Yajra\Datatables\Datatables;

class imagencontroller extends Controller
{
    public function index(Request $request){
        if($request->ajax()){
            $imagen=DB::select("SELECT ima.id_imagen,ima.img_ruta,ima.img_estado ,tp.nombre_servicio FROM imagenes as ima, tipo_servicio as tp WHERE ima.id_tipo_servicio=tp.id_tiposervicio and img_estado='Activo' and tp.nombre_servicio='Laboratorio'");
            return Datatables::of($imagen)
                ->addColumn('imagen', function ($imagen){
                    $url= asset('Imagenes/laboratorios/'.$imagen->img_ruta);
                    return '<img src="'.$url.'"   height="100px" width="100px"/>';
                })->rawColumns(['imagen', 'action'])->make(true);

        }

         $tipo=tiposervicio::where('estado_servicio', 'Activo')->orderBy('id_tiposervicio', 'desc')->get();
        return view('imagen.imagen',['tiposer'=>$tipo]);

    }
    public function store(Request $request){
        $regla=[

            'imagen'=>'mimes:jpeg,bmp,png,jpg ',
            'estado'=>'required',
            'tipo_Servicio'=>'required',

        ];
        $valida=Validator::make(Input::all(),$regla);
        if($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        } else{
            $imagen=new  imagen();
            $imagen->img_estado=$request->estado;
            $imagen->id_tipo_servicio=$request->tipo_Servicio;
            if($imagen->img_ruta===null){
                if(Input::HasFile('imagen')){
                    $file=Input::file('imagen');
                    $file->move(public_path().'/Imagenes/laboratorios',$file->getClientOriginalName());
                    $imagen->img_ruta=$file->getClientOriginalName();
                }
            } else{
                $imagen->img_ruta='descarga.jpg';
            }
           $imagen->save();

        }
        return response()->json(array("success"=>true));


    }

    public function listar(){
     $imagen=DB::select("SELECT * FROM  imagenes as im WHERE im.id_tipo_servicio=1 and img_estado='Activo' LIMIT 0,6");
     $imagen1=DB::select("SELECT * FROM  imagenes as im WHERE im.id_tipo_servicio=2 and img_estado='Activo' LIMIT 0,6");

        return view('web.index',['imagen'=>$imagen,'imagen1'=>$imagen1]);
    }
    public function cargar($id){
      $cargar=DB::SELECT("SELECT im.id_imagen,im.img_ruta,im.img_estado,tp.nombre_servicio FROM  imagenes as im , tipo_servicio as tp WHERE im.id_tipo_servicio=tp.id_tiposervicio and im.id_imagen=$id");
     return response()->json($cargar);
    }

    public function Eliminar($id){
        $image=imagen::find($id);
        $image_path ="Imagenes/laboratorios/$image->img_ruta";
        if(\File::exists(Public_path($image_path))) {
            \File::delete(Public_path($image_path));
        }else{

            dd('File does not exists.');

        }
        $image->delete();
        return response()->json(array("success"=>true));
    }

}
