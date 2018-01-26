<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //constructor para crear el carrito
    public function __construct(){
    	// Si no existe la variable de sesion cart, entonces lo crea en un array
    	if(!\Session::has('cart')) \Session::put('cart', array());

    }

    public function show(){
    	return \Session::get('cart');//obtener la variable de sesion y lo mostramos

    }
}
