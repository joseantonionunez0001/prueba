<?php

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crear', function () {
    return view('crear');
});

Route::get('/users', function () {
    $pedido = Pedido::whereId(1)->first();

    $productos = $pedido->pedidos_productos;
    dd($productos); 

    return view('usuarios')->with('productos', $productos);
});

Route::get('/dashboard', function(){
    $users = User::all();
    return view('dashboard')->with('users', $users);
});

Route::get('/ver-pedidos', function(Request $request){
    $idUsuario = $request->usuario;
    $pedidos = Pedido::where('user_id', $idUsuario)->get();

    return view('pedidos')->with('pedidos', $pedidos);
});