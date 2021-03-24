<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  dd ('Si llega'); //dd es una funcion de laravel para imprimir en consala
       $alumnos=Alumno::all();
        return view('admin.alumnos.index')->with('alumnos',$alumnos);
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
        //AQUI VA LO DE LA BD
        //dd($request);
        $alumno = new Alumno();
        $alumno -> ncontrol = $request -> ncontrol;
        $alumno -> nombre = $request -> nombre;
        $alumno -> direccion = $request -> direccion;
        $alumno -> telefono = $request -> telefono;
        $alumno -> nacimiento = $request -> nacimiento;
        $alumno -> correo = $request -> correo;
        
        $alumno -> save();
        return redirect()->route('alumnos.inicio');
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
        $alumno = Alumno :: find($id);
        return view('admin.alumnos.alumnosEdit')->with('alumno',$alumno);
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
        //Tomamos los datos a actualizar del form y los guardamos en un objeto $alumno
        $alumno = Alumno :: find($id);
        $alumno -> ncontrol = $request->ncontrol;
        $alumno -> nombre = $request->nombre;
        $alumno -> direccion = $request->direccion;
        $alumno -> nacimiento = $request->nacimiento;
        $alumno -> telefono = $request->telefono;
        $alumno -> correo = $request->correo;
        //Guardamos los datos en la bd
        $alumno -> save();
        //Regresamos
        return redirect() -> route('alumnos.inicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno :: find($id);
        $alumno -> delete();
        return redirect() -> route('alumnos.inicio');
    }
}
