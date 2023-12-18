<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listaDocentes',[DocenteController::class,'index']);
Route::post('/agregarDocente',[DocenteController::class,'store']);
Route::get('/mostrarDocente/{id}',[DocenteController::class,'show']);
Route::put('/editarDocente/{id}',[DocenteController::class,'update']);
Route::delete('/eliminarDocentes/{id}',[DocenteController::class,'destroy']);


Route::get('/listaAlumnos',[AlumnoController::class,'index']);
Route::post('/agregarAlumnos',[AlumnoController::class,'store']);
Route::get('/mostrarAlumno/{id}',[AlumnoController::class,'show']);
Route::put('/editarAlumnos/{id}',[AlumnoController::class,'update']);
Route::delete('/eliminarAlumno/{id}',[AlumnoController::class,'destroy']);


Route::get('/listaCursos',[CursoController::class,'index']);
Route::post('/agregarCurso',[CursoController::class,'store']);
Route::get('/mostrarCurso/{id}',[CursoController::class,'show']);
Route::put('/editarCurso/{id}',[CursoController::class,'update']);
Route::delete('/eliminarCurso/{id}',[CursoController::class,'destroy']);


Route::get('/listaMatriculas',[MatriculaController::class,'index']);
Route::post('/agregarMatricula',[MatriculaController::class,'store']);
Route::get('/mostrarMatricula/{id}',[MatriculaController::class,'show']);
Route::put('/editarMatricula/{id}',[MatriculaController::class,'update']);
Route::delete('/eliminarMatricula/{id}',[MatriculaController::class,'destroy']);
