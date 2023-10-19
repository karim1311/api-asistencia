<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencia = new Asistencia();
        return $asistencia->all();
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
        $asistencia = new Asistencia();
        $asistencia->id_curso = $request->id_curso;
        $asistencia->id_alumno = $request->id_alumno;
        $asistencia->sep01 = $request->sep01;
        $asistencia->sep04 = $request->sep04;
        $asistencia->sep05 = $request->sep05;
        $asistencia->sep06 = $request->sep06;
        $asistencia->sep07 = $request->sep07;
        $asistencia->sep08 = $request->sep08;
        $asistencia->sep11 = $request->sep11;
        $asistencia->sep12 = $request->sep12;
        $asistencia->sep13 = $request->sep13;
        $asistencia->sep14 = $request->sep14;
        $asistencia->sep15 = $request->sep15;
        $asistencia->sep18 = $request->sep18;
        $asistencia->sep19 = $request->sep19;
        $asistencia->sep20 = $request->sep20;
        $asistencia->sep21 = $request->sep21;
        $asistencia->sep22 = $request->sep22;
        $asistencia->sep25 = $request->sep25;
        $asistencia->sep26 = $request->sep26;
        $asistencia->sep27 = $request->sep27;
        $asistencia->sep28 = $request->sep28;
        $asistencia->sep29 = $request->sep29;
        $asistencia->save();
        return "Registro de asistencia guardado correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Asistencia::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $asistencias = Asistencia::all();
        $asistencia = $asistencias->find($id);
        $asistencia->id_curso = $request->id_curso;
        $asistencia->id_alumno = $request->id_alumno;
        $asistencia->sep01 = $request->sep01;
        $asistencia->sep04 = $request->sep04;
        $asistencia->sep05 = $request->sep05;
        $asistencia->sep06 = $request->sep06;
        $asistencia->sep07 = $request->sep07;
        $asistencia->sep08 = $request->sep08;
        $asistencia->sep11 = $request->sep11;
        $asistencia->sep12 = $request->sep12;
        $asistencia->sep13 = $request->sep13;
        $asistencia->sep14 = $request->sep14;
        $asistencia->sep15 = $request->sep15;
        $asistencia->sep18 = $request->sep18;
        $asistencia->sep19 = $request->sep19;
        $asistencia->sep20 = $request->sep20;
        $asistencia->sep21 = $request->sep21;
        $asistencia->sep22 = $request->sep22;
        $asistencia->sep25 = $request->sep25;
        $asistencia->sep26 = $request->sep26;
        $asistencia->sep27 = $request->sep27;
        $asistencia->sep28 = $request->sep28;
        $asistencia->sep29 = $request->sep29;
        $asistencia->save();
        return $asistencia;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->delete();
        return "Asistencia eliminada correctamente";
    }
}
