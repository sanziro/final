<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Gate;
use Auth;
use App\Http\Requests;
use App\Modelos\Configuracion;
use App\Modelos\Alumno;
use DB;
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('soy_', 'administracion')) {
            abort(403);    //ver a donde redireccionar o q hacer
        }

        $conf=Configuracion::find(1);
        $alumnos=Alumno::paginate($conf->cantElem);  //all()->paginate(12);
       $alumnos->setPath('/final/public/alumno');
       return view('AlumnoController.index', ['titulo' => $conf->titulo,
                                      'descripcion'=>$conf->descripcion,
                                      'contacto'=>$conf->mailContacto,
                                      'alumnos'=>$alumnos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Gate::denies('soy_', 'administracion')) {
            abort(403);    //ver a donde redireccionar o q hacer
        }
       $conf=Configuracion::find(1);
       
    return view('AlumnoController.create',['titulo' => $conf->titulo,
                                      'descripcion'=>$conf->descripcion,
                                      'contacto'=>$conf->mailContacto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (Gate::denies('soy_', 'administracion')) {
            abort(403);    //ver a donde redireccionar o q hacer
        }
       // echo $request;
       $conf=Configuracion::find(1);
       // echo $request->alumno;
       $alumno=new Alumno;                                                                            
       $alumno->nombre=$request->alumno['nombre']; 
       $alumno->apellido=$request->alumno['apellido'];
       $alumno->numeroDoc=$request->alumno['numeroDoc'];
       $alumno->sexo=$request->alumno['sexo'];
       $alumno->fechaNacimiento=$request->alumno['fechaNacimiento'];
       $alumno->mail=$request->alumno['mail'];
      // $alumno->direccion=$request->alumno['direccion'];
       $alumno->fechaIngreso=$request->alumno['fechaIngreso'];
       $alumno->fechaEgreso=$request->alumno['fechaEgreso'];
      // $alumno->fechaAlta=getdate();
       
       //echo $alumno;
       $alumno->save();
       return Redirect::to('/alumno');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno=Alumno::find($id);
        echo $alumno;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->habilitado = Input::get('habilitado');
        $user->rol = Input::get('rol');
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
