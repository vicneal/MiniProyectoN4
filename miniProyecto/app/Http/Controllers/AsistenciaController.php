<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Asistencia::all();
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
        $asistencia->id_matricula = $request->id_matricula;
        $asistencia->fecha = $request->fecha;
        $asistencia->EstadoAsistencia = $request->EstadoAsistencia;
        $asistencia->save();


        return 'Asistencia añadida Correctamente';
    }

    /**
     * Display the specified resource.
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    public function showasistenciaAlumno( $id)
    {
        $alumno = Alumno::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $asistencia =  Asistencia::find($id);
        $asistencia->id_matricula = $request->id_matricula;
        $asistencia->fecha = $request->fecha;
        $asistencia->EstadoAsistencia = $request->EstadoAsistencia;
        $asistencia->save();
        return 'Asistencia modificada Correctamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $asistencia =  Asistencia::find($id);
        $asistencia->delete();
        return 'Matricula eliminada Correctamente';
    }
}
