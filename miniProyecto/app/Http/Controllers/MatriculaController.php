<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Matricula::all();
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
        $matricula = new Matricula();
        $matricula->id_estudiante = $request->id_estudiante;
        $matricula->id_curso = $request->id_curso;
        $matricula->save();


        return 'Matricula añadida Correctamente';
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $matricula =  Matricula::find($id);
        $matricula->save();
        return $matricula;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $matricula =  Matricula::find($id);
        $matricula->id_estudiante = $request->id_estudiante;
        $matricula->id_curso = $request->id_curso;
        $matricula->save();
        return 'Matricula modificada Correctamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $matricula =  Matricula::find($id);
        $matricula->delete();
        return 'Matricula eliminada Correctamente';
    }
}
