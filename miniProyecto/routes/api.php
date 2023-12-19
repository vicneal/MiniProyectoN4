<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsistenciaController;
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


Route::get('/listaAsistencias',[AsistenciaController::class,'index']);
Route::post('/agregarAsistencia',[AsistenciaController::class,'store']);
Route::get('/mostrarAsistencia/{id}',[AsistenciaController::class,'show']);
Route::put('/editarAsistencia/{id}',[AsistenciaController::class,'update']);
Route::delete('/eliminarAsistencia/{id}',[AsistenciaController::class,'destroy']);



// { DOCENTE
//
//     "nombre": "Jaylon Heathcote Jr.",
//     "apellido": "Nolan",
//     "fecha_nacimiento": "2020-09-03",
//     "correo": "houston29@gmail.com",
//     "telefono": "+1-743-586-3830",
//     "direccion": "321 Myrl Station\nNew Roel, OK 22856"
//   }

// { ALUMNO
//
//     "nombre": "Jaylon Heathcote Jr.",
//     "apellido": "Nolan",
//     "fecha_nacimiento": "2020-09-03",
//     "correo": "houston29@gmail.com",
//     "telefono": "+1-743-586-3830",
//     "direccion": "321 Myrl Station\nNew Roel, OK 22856"
//   }

// { CURSO
//     "nombre_curso": "ut",
//   }

// { MATRICULA
//     "id_estudiante": 6,
//     "id_curso": 7,
//   }

// {
//     "id_matricula": 6,
//     "fecha": "2003-06-13",
//     "EstadoAsistencia": "A",
//   }
