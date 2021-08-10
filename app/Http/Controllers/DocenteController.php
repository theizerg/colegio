<?php

namespace DSIproject\Http\Controllers;

use DSIproject\Docente;
use DSIproject\Jornadas;
use DSIproject\Grado;
use DSIproject\User;
use DSIproject\Rol;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Barryvdh\DomPDF\Facade as PDF;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    if(Grado::where('estado',1)->count() > 0) {
        if ($request) {
            $query = trim($request->get('searchText'));

            $docentes = Docente::where('estado', 1)
                ->orWhere('estado', 1)
                ->where('nip', 'like', '%' . $query . '%')
                ->orderBy('id', 'asc')
                ->paginate(25);
        }

        return view('docente.index')
            ->with('docentes', $docentes)
            ->with('searchText', $query);
        //$docentes = Docente::orderBy('id','ASC')->paginate(25);
        //return view('docente.index')->with('docentes', $docentes);
        //
        
         
        }else
         flash('
            <h4>Error</h4>
            <p>Debes agregar el grado académico.</p>
        ')->error()->important();
        return \Redirect::to('grados/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes = Docente::get();
        $roles = Rol::orderBy('nombre', 'asc')->where('id',2)->pluck('nombre', 'id');
        return view('docente.create',compact('roles','docente'));
    }

    /**
     * Almacena un docente en la base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //dd($request);

        $docente = new Docente();

        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->nip = $request->nip;
        $docente->especialidad = $request->especialidad;
        $docente->estado = 1;
        $docente->save();

        $user = new User();

        $user->rol_id = $request->rol_id;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->dui = $docente->nip;
        $user->estado = 1;
        $user->save();


        flash('
            <h4>Registro de Docente</h4>
            <p>El Docente <strong>' . $docente->nombre . '</strong> se ha registrado correctamente.</p>
        ')->success()->important();

        return redirect()->route('docentes.index');
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
        $docente = Docente::find($id);

        if (!$docente || $docente->estado == 0) {
            abort(404);
        }

        $users = User::orderBy('nombre', 'asc')->pluck('nombre', 'id');

        return view('docente.edit')
            ->with('docente', $docente)
            ->with('users', $users);
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
         $docente = Docente::find($id);

        if (!$docente || $docente->estado == 0) {
            abort(404);
        }
        
        $docente->fill($request->all());
        
        $docente->save();

        flash('
            <h4>Edición de Docente</h4>
            <p>El docente <strong>' . $docente->id . '</strong> se ha editado correctamente.</p>
        ')->success()->important();

        return redirect()->route('docentes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);

        if (!$docente || $docente->estado == 0) {
            abort(404);
        }

        $docente->estado = 0;

        $docente->save();

        flash('
            <h4>Baja de Docente</h4>
            <p>El Docente <strong>' . $docente->user_id . '</strong> se ha dado de baja correctamente.</p>
        ')->error()->important();

        return redirect()->route('docentes.index');
    }

    public function pdf(Request $request)
    {        
        if ($request) {
            $query = trim($request->get('searchText'));

            $docentes = Docente::where('estado', 1)
                ->where('user_id', 'like', '%' . $query . '%')
                ->orWhere('estado', 1)
                ->where('nip', 'like', '%' . $query . '%')
                ->orderBy('id', 'asc')
                ->paginate(25);
        }

        return view('docente.pdf')
            ->with('docentes', $docentes)
            ->with('searchText', $query);
    }
}
