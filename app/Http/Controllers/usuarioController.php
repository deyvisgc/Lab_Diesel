<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Validator;
use Illuminate\Support\Facades\Input;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $sql=User::where('user_estado','=','Activo')->orderBy('idusuarios')->get();
            return DataTables::of($sql)
                ->addColumn('imagen', function ($sql){
                    $url= asset('Imagenes/Usuario/'.$sql->imagen);
                    return '<img src="'.$url.'"   height="100px" width="100px"/>';
                })->rawColumns(['imagen', 'action'])->make(true);

        }
        return view('usuarios.usuarios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regla=[
            'username'=>'required |unique:usuarios',
             'email'=>'required |unique:usuarios',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'imagen'=>'mimes:jpeg,bmp,png,jpg ',
        ];
        $valida=Validator::make(Input::all(),$regla);
        if($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        }else{
            $user=new User();
            $user->username=$request->username;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->user_estado="Activo";
            if($user->imagen===null){
                $user->imagen='usuario.jpg';
            } else{
                if(Input::HasFile('imagen')){
                    $file=Input::file('imagen');
                    $file->move(public_path().'/Imagenes/Usuario',$file->getClientOriginalName());
                    $user->imagen=$file->getClientOriginalName();
                }


            }
            $user->save();


        }
        return response()->json(array("success"=>true));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
