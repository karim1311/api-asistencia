<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curso = new Curso();
        return $curso->all();
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
        $curso = new curso();
        $curso->name = $request->nombre;
        $curso->save();
        return "Curso guardado correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Curso::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cursos = curso::all();
        $curso = $cursos->find($id);
        $curso->nombre = $request->nombre;
        return $curso;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = curso::find($id);
        $curso->delete();
        return "Curso Eliminado correctamente";
    }
}
