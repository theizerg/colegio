<?php

namespace DSIproject\Http\Controllers;

use DSIproject\Horarios;
use DSIproject\Alumno;
use DSIproject\Docente;
use DSIproject\Materia;
use DSIproject\Grado;
use DSIproject\User;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (\Auth::user()->direc()) {
           
            $horarios = Horarios::paginate(5);

        return view ('horarios.index',compact('horarios'));
       }else{
         $horarios = Horarios::where('usuario_id',\Auth::user()->id)->paginate(5);

        return view ('horarios.index',compact('horarios'));

       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = Alumno::where('estado',1)->get();
        $docentes = Docente::where('estado',1)->get();
        $materias = Materia::where('estado',1)->get();
        $grados = Grado::where('estado',1)->get();
        $usuarios = User::where('estado',1)
        ->where('rol_id',3)
        ->get();
        //dd($usuarios);
        return view('horarios.create',compact('alumnos','docentes','materias','grados','usuarios'));
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $horarios=new Horarios();
       $horarios->alumno_id = $request->alumno_id;
       $horarios->grado_id = $request->grado_id;
       $horarios->materia_id = $request->materia_id;
       $horarios->docente_id = $request->docente_id;
       $horarios->Lunes = $request->Lunes;
       $horarios->Martes = $request->Martes;
       $horarios->Miercoles = $request->Miercoles;
       $horarios->Jueves = $request->Jueves;
       $horarios->Viernes = $request->Viernes;
       $horarios->usuario_id = $request->user_id;

       $horarios->save();

       if ($horarios <> null) {
        
        flash('
            <h4>Registro de horario</h4>
            <p>El horario se ha registrado correctamente.</p>
        ')->success()->important();

        return redirect()->route('horario.index');
       }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \DSIproject\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function show(Horarios $horarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \DSIproject\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos = Alumno::where('estado',1)->get();
        $docentes = Docente::where('estado',1)->get();
        $materias = Materia::where('estado',1)->get();
        $grados = Grado::where('estado',1)->get();
        $horario = Horarios::find($id);
        return view('horarios.edit',compact('alumnos','docentes','materias','grados','horario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \DSIproject\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $horarios= Horarios::find($id);
       $horarios->alumno_id = $request->alumno_id;
       $horarios->grado_id = $request->grado_id;
       $horarios->materia_id = $request->materia_id;
       $horarios->docente_id = $request->docente_id;
       $horarios->Lunes = $request->Lunes;
       $horarios->Martes = $request->Martes;
       $horarios->Miercoles = $request->Miercoles;
       $horarios->Jueves = $request->Jueves;
       $horarios->Viernes = $request->Viernes;

       $horarios->save();

       if ($horarios <> null) {
        
        flash('
            <h4>Registro de horario</h4>
            <p>El horario se ha registrado correctamente.</p>
        ')->success()->important();

        return redirect()->route('horario.index');
       }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \DSIproject\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horarios $horarios)
    {
        //
    }
}
