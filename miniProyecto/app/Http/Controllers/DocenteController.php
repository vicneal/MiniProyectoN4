<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

/**
* @OA\Info(
*             title="API docentes",
*             version="1.0",
*             description="listado de URI's de la API Docentes "
* )
*
* @OA\Server(url="http://127.0.0.1:8000/")
*/
class DocenteController extends Controller
{


/**
     * Listado de todos los registros de los Docentes
     * @OA\Get (
     *     path="/api/listaDocentes",
     *     tags={"Docente"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="nombre",
     *                         type="string",
     *                         example="Aderson Felix"
     *                     ),
     *                     @OA\Property(
     *                         property="apellido",
     *                         type="string",
     *                         example="Jara Lazaro"
     *                     ),
     *                     @OA\Property(
     *                         property="fecha_nacimiento",
     *                         type="date",
     *                         example="2020-09-03"
     *                     ),
     *                     @OA\Property(
     *                         property="correo",
     *                         type="string",
     *                         example="houston29@gmail.com"
     *                     ),
     *                     @OA\Property(
     *                         property="telefono",
     *                         type="string",
     *                         example="+1-743-586-3830"
     *                     ),
     *                     @OA\Property(
     *                         property="direccion",
     *                         type="string",
     *                         example="321 Myrl Station New Roel, OK 22856"
     *                     ),
     *                     @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                         example="2023-02-23T00:09:16.000000Z"
     *                     ),
     *                     @OA\Property(
     *                         property="updated_at",
     *                         type="string",
     *                         example="2023-02-23T12:33:45.000000Z"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        return Docente::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->fecha_nacimiento = $request->fecha_nacimiento;
        $docente->correo = $request->correo;
        $docente->telefono = $request->telefono;
        $docente->direccion = $request->direccion;
        $docente->save();

        return 'Docente añadido Correctamente';
    }

    /**
    * Mostrar la información de un Docente
    * @OA\Get (
    *     path="/api/mostrarDocente/{id}",
    *     tags={"Docente"},
    *     @OA\Parameter(
    *         in="path",
    *         name="id",
    *         required=true,
    *         @OA\Schema(type="string")
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="OK",
    *         @OA\JsonContent(
    *              @OA\Property(property="id", type="number", example=1),
    *              @OA\Property(property="nombre", type="string", example="Aderson Felix"),
    *              @OA\Property(property="apellido", type="string", example="Jara Lazaro"),
    *              @OA\Property(property="fecha_nacimiento", type="date", example="2020-09-03"),
    *              @OA\Property(property="correo", type="date", example="houston29@gmail.com"),
    *              @OA\Property(property="telefono", type="date", example="+1-743-586-3830"),
    *              @OA\Property(property="direccion", type="date", example="321 Myrl Station New Roel, OK 22856"),
    *              @OA\Property(property="created_at", type="string", example="2023-02-23T00:09:16.000000Z"),
    *              @OA\Property(property="updated_at", type="string", example="2023-02-23T12:33:45.000000Z")
    *         )
    *     ),
    *      @OA\Response(
    *          response=404,
    *          description="NOT FOUND",
    *          @OA\JsonContent(
    *              @OA\Property(property="message", type="string", example="No query results for model [App\\Models\\Docente] #id"),
    *          )
    *      )
    * )
    */
    public function show( $id)
    {
        $docente = Docente::find($id);
        $docente->save();

        return $docente;
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
    public function update(Request $request,  $id)
    {
        $docente = Docente::find($id);
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->fecha_nacimiento = $request->fecha_nacimiento;
        $docente->correo = $request->correo;
        $docente->telefono = $request->telefono;
        $docente->direccion = $request->direccion;
        $docente->save();
        return 'Docente modificado Correctamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $docente = Docente::find($id);
        $docente->delete();

        return 'Docente eliminado Correctamente';
    }
}
