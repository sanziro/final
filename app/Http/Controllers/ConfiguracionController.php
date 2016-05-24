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
use Illuminate\Support\Facades\Input;
class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//
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
        //
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
    public function edit()
    {
        $conf=Configuracion::find(1);
        return view('ConfiguracionController.edit', ['titulo' => $conf->titulo,
                                                      'datos' => $conf,   //no se por q no anda mauri HELP 
                                                     'contacto'=>$conf->mailContacto]);
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
        $configuracion = Configuracion::find(1);
        $configuracion ->titulo = Input::get('titulo');
        $configuracion ->mailContacto =  Input::get('mailContacto');
        $configuracion ->cantElem =    Input::get('cantElem');
        $configuracion ->textoDeshab =   Input::get('textoDeshab');
        $configuracion ->descripcion =  Input::get('descripcion');
        $configuracion ->habilitada =   Input::get('habilitada') ;
        $configuracion->save();
        return Redirect::to('/configuracion/1/edit');
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
