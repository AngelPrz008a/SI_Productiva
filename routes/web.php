<?php

use App\Http\Controllers\AprendizController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\EntregablesController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\ReunionAprendizController;
use App\Http\Controllers\UsuarioController;
//use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Landing.Landing');
});

//APRENDICES
Route::resource(
    'aprendices', AprendizController::class
);

//INSTRUCTORES
Route::resource(
    'instructores', InstructorController::class
);

//PROGRAMAS
Route::resource(
    'programas', ProgramaController::class
);
Route::get(
    'programas/habilitar/{id}', 'App\Http\Controllers\ProgramaController@habilitar'::class
);

//FICHAS
Route::resource(
    'fichas', FichaController::class
);

//USUARIOS
Route::resource(
    'usuarios', UsuarioController::class
);
Route::get(
    'usuarios/habilitar/{id}', 'App\Http\Controllers\UsuarioController@habilitar'::class
);

//ENTREGABLES
Route::resource(
    'entregables', EntregablesController::class
);
Route::get('entregables/habilitar/{h}' , 'App\Http\Controllers\EntregablesController@habilitar'::class);

//CENTROS
Route::resource(
    'centros', CentroController::class
);

//REUNION APRENDIZ
Route::resource(
    'reunionAprendiz', ReunionAprendizController::class
);
Route::get(
    'reunionAprendiz/habilitar/{id}', 'App\Http\Controllers\ReunionAprendizController@habilitar'::class
);

//Login
Route::get('login','App\Http\Controllers\LoginController@showLogin'::class);
Route::post('login', 'App\Http\Controllers\LoginController@login'::class);


Route::get('login/{rol}', function ($rol) {
    return view('home/'.$rol);
});

Route::get('Landing', function(){
    return view('Landing.Landing');
});


//////////////////////
