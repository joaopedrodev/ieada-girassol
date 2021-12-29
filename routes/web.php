<?php

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
use App\Http\Controllers\MembrosController;
/*-ABRE ROTA DE CRIAÇÃO E CADASTRO DE MEMBROS--*/
Route::get('/membro/index', [MembrosController::class,'index'])->middleware('auth');
Route::get('/membro/create', [MembrosController::class,'create'])->middleware('auth');
Route::get('/membro/{id}', [MembrosController::class,'show']);
Route::post('/membro', [MembrosController::class,'store']);
Route::delete('/membro/{id}',[MembrosController::class,'destroy'])->middleware('auth');
Route::get('/membro/edit/{id}',[MembrosController::class,'edit'])->middleware('auth');
Route::put('/membro/update/{id}',[MembrosController::class,'update'])->middleware('auth');
/*-FECHA ROTA DE CRIAÇÃO E CADASTRO DE MEMBROS--*/


use App\Http\Controllers\AdminController;
Route::get('/admin/index', [AdminController::class,'index'])->middleware('auth');

use App\Http\Controllers\CadastroController;
Route::get('/admin/cadastro', [CadastroController::class,'index'])->middleware('auth');

/*-ABRE ROTA DE CRIAÇÃO DE EVENTOS--*/
use App\Http\Controllers\EventController;
Route::get('/eventos', [EventController::class,'event'])->middleware('auth');
Route::get('/events/index', [EventController::class,'index'])->middleware('auth');
Route::get('/events/create', [EventController::class,'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class,'show'])->middleware('auth');
Route::post('/events/index', [EventController::class,'store'])->middleware('auth');
Route::delete('/events/{id}',[EventController::class,'destroy'])->middleware('auth');
Route::get('/events/edit/{id}',[EventController::class,'edit'])->middleware('auth');
Route::put('/events/update/{id}',[EventController::class,'update'])->middleware('auth');
/*-FECHA ROTA DE CRIAÇÃO DE EVENTOS--*/

/*-ABRE ROTA DE USUÁRIOS--*/
use App\Http\Controllers\UserController;
Route::get('/users/index', [UserController::class,'index']);
Route::get('/users/create', [UserController::class,'create']);
Route::get('/users/{id}', [UserController::class,'show']);
Route::post('/users/index', [UserController::class,'store']);
Route::delete('/users/{id}',[UserController::class,'destroy']);

/*-FECHA ROTA DE USUÁRIOS--*/

/*-ABRE ROTA DA ATA--*/
use App\Http\Controllers\AtaController;
Route::get('/ata/index', [AtaController::class,'index']);
Route::get('/ata/create', [AtaController::class,'create']);
Route::get('/ata/{id}', [AtaController::class,'show']);
Route::post('/ata/index', [AtaController::class,'store']);
Route::delete('/ata/{id}',[AtaController::class,'destroy']);
Route::get('/ata/edit/{id}',[AtaController::class,'edit']);
Route::put('/ata/update/{id}',[AtaController::class,'update']);

/*-FECHA ROTA DA ATA--*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('/pastores', function () {
    return view('pastores');
});

Route::get('/quem_somos', function(){
    return view('quem_somos');
});
Route::get('/contato', function(){
    return view('contato');
});
Route::get('/portal', function(){
    return view('portal');
})->middleware('auth');

Route::get('/grupo_alfa', function(){
    return view('grupo_alfa');
});
Route::get('/sublime_louvor', function(){
    return view('sublime_louvor');
});
Route::get('nova_alianca', function(){
    return view('/nova_alianca');
});
Route::get('/renascer_em_cristo',function(){
    return view('renascer');
});
Route::get('/escola_bibliba', function(){
    return view('escola_biblica');
});
Route::get('/primicias', function(){
    return view('primicias');
});
Route::get('/koinonia', function(){
    return view('koinonia');
});
Route::get('/evangelista', function(){
    return view('evangelista');
});
Route::get('/presbiteros', function(){
    return view('presbiteros');
});
Route::get('/auxiliares', function(){
    return view('auxiliares');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


