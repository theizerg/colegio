<?php

namespace DSIproject\Http\Controllers;

use DSIproject\Anio;
use DSIproject\Nivel;
use DSIproject\Http\Requests\AnioRequest;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class AnioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       if (Nivel::where('estado',1)->count() > 0) {
            if ($request) {
            $query = trim($request->get('searchText'));

            $anios = Anio::where('estado', 1)
                ->where('numero', 'like', '%' . $query . '%')
                ->orWhere('estado', 1)
                ->where('activo', 'like', '%' . $query . '%')
                ->orderBy('numero', 'asc')
                ->paginate(25);
        }

        return view('anios.index')
            ->with('anios', $anios)
            ->with('searchText', $query);
       }
       else
         flash('
            <h4>Error</h4>
            <p>Debes Ingresa el nivel educativo.</p>
        ')->error()->important();
        return \Redirect::to('nivel/create');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    //dd($request);
        $anio = new Anio($request->all());

        $anio->estado = 1;

        if ($request->activo == 1) {
            $anios = Anio::all();

            foreach ($anios as $a) {
                $a->activo = 0;

                $a->save();
            }

            $anio->activo = 1;
        } else {
            $anio->activo = 0;
        }

        if ($request->editable == 1) {
            $anio->editable = 1;
        } else {
            if ($anio->activo == 1) {
                $anio->editable = 1;
            } else {
                $anio->editable = 0;
            }
        }

        $anio->save();

        flash('
            <h4>Registro de A??o Escolar</h4>
            <p>El a??o Escolar <strong>' . $anio->numero . '</strong> se ha registrado correctamente.</p>
        ')->success()->important();

        return redirect()->route('anios.index');
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
        $anio = Anio::find($id);

        if (!$anio || $anio->estado == 0) {
            abort(404);
        }

        return view('anios.edit')
            ->with('anio', $anio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnioRequest $request, $id)
    {
        $anio = Anio::find($id);

        if (!$anio || $anio->estado == 0) {
            abort(404);
        }

        $anio->numero = $request->numero;

        if ($request->activo == 1 && $anio->activo == 0) {
            $anios = Anio::all();

            foreach ($anios as $a) {
                $a->activo = 0;

                $a->save();
            }

            $anio->activo = 1;
        } elseif ($request->activo == 0 && $anio->activo == 1) {
            flash('
                <h4>No puede quitar el valor de activo a este a??o</h4>
                <p>Asigne a otro a??o el valor de activo, as?? este a??o pasar?? a ser inactivo.</p>
            ')->error()->important();

            return back();
        }

        if ($request->editable == 1) {
            $anio->editable = 1;
        } else {
            if ($anio->activo == 1) {
                $anio->editable = 1;
            } else {
                $anio->editable = 0;
            }
        }

        $anio->save();

        flash('
            <h4>Edici??n de A??o Escolar</h4>
            <p>El A??o Escolar <strong>' . $anio->numero . '</strong> se ha editado correctamente.</p>
        ')->success()->important();

        return redirect()->route('anios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anio = Anio::find($id);

        if (!$anio || $anio->estado == 0) {
            abort(404);
        }

        if ($anio->activo == 1) {
            flash('
                <h4>Error al Dar de Baja el A??o Escolar</h4>
                <p>Este es el a??o activo, por lo tanto no se puede dar de baja.</p>
            ')->error()->important();

            return back();
        }

        $anio->estado = 0;

        $anio->save();

        flash('
            <h4>Baja de A??o Escolar</h4>
            <p>El a??o escolar <strong>' . $anio->numero . '</strong> se ha dado de baja correctamente.</p>
        ')->error()->important();

        return redirect()->route('anios.index');
    }
}
