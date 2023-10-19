<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docente = new Docente();
        return $docente->all();
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
        $docente = new Docente();
        $docente->nombre = $request->nombre;
        $docente->id_curso = $request->id_curso;
        $docente->correo = $request->correo;
        $docente->telefono = $request->telefono;
        $docente->save();
        return "Registro de docente guardado correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Docente::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $docentes = Docente::all();
        $docente = $docentes->find($id);
        $docente->nombre = $request->nombre;
        $docente->id_curso = $request->id_curso;
        $docente->correo = $request->correo;
        $docente->telefono = $request->telefono;
        $docente->save();
        return $docente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return "Docente eliminada correctamente";
    }
}
