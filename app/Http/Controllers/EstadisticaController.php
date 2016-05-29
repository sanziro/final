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

class EstadisticaController extends Controller
{
     public function index($iduser){
        if (Gate::denies('soy_', 'consulta')) {
            
            $con=DB::insert("SELECT * 
	                    FROM Alumnos INNER JOIN Pagos ON (Alumnos.id=Pagos.idAlumno) 
	                                 INNER JOIN Cuotas ON (Pagos.idCuota=Cuotas.id) 
	                                 INNER JOIN AlumnoResponsable ON (Alumnos.id = AlumnoResponsable.idAlumno) 
	                                 INNER JOIN Responsables ON (Responsables.id= AlumnoResponsable.idResponsable) 
	                                 INNER JOIN UsuarioResponsable ON (UsuarioResponsable.idResponsable=Responsables.id) 
	                                 INNER JOIN Usuarios ON (Usuarios.id=UsuarioResponsable.idUsuario) 
	                    WHERE Cuotas.tipo='matricula' and Alumnos.eliminado=0 and Cuotas.anio = YEAR(CURRENT_DATE()) and Usuarios.username=:user ", [$iduser]);
	     
       }
       else
        {
             $con=DB::insert("SELECT * 
	                    FROM Alumnos INNER JOIN Pagos ON (Alumnos.id=Pagos.idAlumno) 
	                                 INNER JOIN Cuotas ON (Pagos.idCuota=Cuotas.id) 
	                                 INNER JOIN AlumnoResponsable ON (Alumnos.id = AlumnoResponsable.idAlumno) 
	                                 INNER JOIN Responsables ON (Responsables.id= AlumnoResponsable.idResponsable) 
	                                 INNER JOIN UsuarioResponsable ON (UsuarioResponsable.idResponsable=Responsables.id) 
	                                 INNER JOIN Usuarios ON (Usuarios.id=UsuarioResponsable.idUsuario) 
	                    WHERE Cuotas.tipo='matricula' and Alumnos.eliminado=0 and Cuotas.anio = YEAR(CURRENT_DATE())");
        }
        $alumnos=Alumno::paginate($con->cantElem);  //all()->paginate(12);
       $alumnos->setPath('/final/public/estadisticas/'.$iduser);
       return view('AlumnoController.index', ['datos' => $con]);               
    }
 
 
 
 
 
 
 
     public function show(Request $request,$iduser){
        if ($request->has('datopost')) {
            $con=selectQuery($request->alumno['datopost']);
       }
        else {
           return redirect()->action('EstadisticaController@index', $iduser);
       }
      
    }
    
    
    
    
    
    
    
    private function selectQuery ($type){
        if ((Auth::user()->rol) != "consulta") {
        if ($type == 1) {
            return $con=DB::insert("SELECT Alumnos.nombre, Alumnos.apellido, Cuotas.fechaAlta,Cuotas.comisionCob,Cuotas.monto 
                            FROM Alumnos 
                           INNER JOIN Pagos ON (Alumnos.id=Pagos.idAlumno)
                            INNER JOIN Cuotas ON (Pagos.idCuota=Cuotas.id) 
                            WHERE Cuotas.tipo='matricula' and Alumnos.eliminado=0 and Cuotas.anio = YEAR(CURRENT_DATE())");
       }
        if ($type == 2) {
            return $con=DB::insert("SELECT Alumnos.apellido,Alumnos.nombre,Cuotas.numero,Cuotas.fechaAlta,Cuotas.monto,Cuotas.comisionCob,Pagos.becado FROM Cuotas INNER JOIN Pagos ON (Cuotas.id=Pagos.idCuota) 
			                                  INNER JOIN Alumnos ON (Alumnos.id=Pagos.idAlumno) WHERE 1 ORDER BY Cuotas.fechaAlta");
       }
        if ($type == 3) {
            return $con=DB::insert("SELECT * FROM (SELECT * FROM Cuotas WHERE Cuotas.mes < MONTH(CURRENT_DATE) AND Cuotas.anio <= year(CURRENT_DATE)) as ta1,(SELECT *
						     FROM Alumnos 
                             WHERE 1) as alu2 WHERE NOT EXISTS (SELECT * 
                                                                FROM Pagos 
                                                                where Pagos.idCuota=ta1.id and Pagos.idAlumno = alu2.id)
								                                ORDER BY ta1.anio DESC,ta1.mes DESC");
       }
        }
        else{
             if ($type == 1) {
            return $con=DB::insert("SELECT * 
	                    FROM Alumnos INNER JOIN Pagos ON (Alumnos.id=Pagos.idAlumno) 
	                                 INNER JOIN Cuotas ON (Pagos.idCuota=Cuotas.id) 
	                                 INNER JOIN AlumnoResponsable ON (Alumnos.id = AlumnoResponsable.idAlumno) 
	                                 INNER JOIN Responsables ON (Responsables.id= AlumnoResponsable.idResponsable) 
	                                 INNER JOIN UsuarioResponsable ON (UsuarioResponsable.idResponsable=Responsables.id) 
	                                 INNER JOIN Usuarios ON (Usuarios.id=UsuarioResponsable.idUsuario) 
	                    WHERE Cuotas.tipo='matricula' and Alumnos.eliminado=0 and Cuotas.anio = YEAR(CURRENT_DATE()) and Usuarios.username=?", [$iduser]);
       }
        if ($type == 2) {
            return $con=DB::insert("SELECT * FROM Cuotas 
			                         INNER JOIN Pagos ON (Cuotas.id=Pagos.idCuota) 
			                         INNER JOIN Alumnos ON (Alumnos.id=Pagos.idAlumno)
                                     INNER JOIN AlumnoResponsable ON (Alumnos.id = AlumnoResponsable.idAlumno) 
	                                 INNER JOIN Responsables ON (Responsables.id= AlumnoResponsable.idResponsable) 
	                                 INNER JOIN UsuarioResponsable ON (UsuarioResponsable.idResponsable=Responsables.id) 
	                                 INNER JOIN Usuarios ON (Usuarios.id=UsuarioResponsable.idUsuario) 
                                     WHERE Cuotas.tipo='matricula' and Alumnos.eliminado=0 and Cuotas.anio = YEAR(CURRENT_DATE()) and Usuarios.username=? ORDER BY Cuotas.fechaAlta", [$iduser]);
       }
        if ($type == 3) {
            return $con=DB::insert("SELECT * FROM Cuotas WHERE Cuotas.mes < MONTH(CURRENT_DATE) AND Cuotas.anio <= year(CURRENT_DATE)) as ta1,
                                    (SELECT AlumnoResponsable.idAlumno,Alumnos.nombre,Alumnos.apellido,Alumnos.numeroDoc
                                    FROM Usuarios  INNER JOIN UsuarioResponsable ON (Usuarios.id = UsuarioResponsable.idUsuario) 
                                    INNER JOIN AlumnoResponsable  ON ( UsuarioResponsable.idResponsable = AlumnoResponsable.idResponsable)
                                    INNER JOIN Alumnos ON (Alumnos.id = AlumnoResponsable.idAlumno) 
                                    WHERE Usuarios.username=?) as tat2 WHERE NOT EXISTS (SELECT * FROM Pagos where Pagos.idCuota=ta1.id and Pagos.idAlumno= tat2.idAlumno) ORDER BY ta1.anio DESC,ta1.mes DESC", [$iduser]);
       }
            
        }
        
    } 

   
    

         
         
         
         
         
         
         
         
         
     }
