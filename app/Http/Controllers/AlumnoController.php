<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumno = new Alumno();
        return $alumno->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->id_curso = $request->id_curso;
        $alumno->correo = $request->correo;
        $alumno->telefono = $request->telefono;
        $alumno->save();
        return "Registro de alumno guardado correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Alumno::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumnos = Alumno::all();
        $alumno = $alumnos->find($id);
        $alumno->nombre = $request->nombre;
        $alumno->id_curso = $request->id_curso;
        $alumno->correo = $request->correo;
        $alumno->telefono = $request->telefono;
        $alumno->save();
        return $alumno;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return "Alumno eliminado correctamente";
    }
}
