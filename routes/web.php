<?php

use App\Models\servicos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $SERVICO = new servicos;
    $SERVICO->name = "Adalberto";
    $SERVICO->tel = "123456789";
    $SERVICO->orig = "Celular";
    $SERVICO->date = "17/03/2023";
    $SERVICO->obs = "Legal";
    $SERVICO->save();
    return view('welcome');
});
