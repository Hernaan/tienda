<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class CartController extends Controller
{
    //constructor para crear el carrito
    public function __construct(){
    	// Si no existe la variable de sesion cart, entonces lo crea en un array
    	if(!\Session::has('cart')) \Session::put('cart', array());

    }
    //mostrar carrito
    public function show(){
    	$cart = \Session::get('cart');//obtener la variable de sesion
        $total = $this->total();//precio total
    	return view('store.cart', compact('cart', 'total'));


    }

    //agregar productos al carrito
    public function add(Product $product){
    	$cart = \Session::get('cart');//recibe la variable de sesion y lo guarda en una variable local
    	$product->quantity = 2; //la cantidad del producto es 1 por default
    	$cart[$product->slug] = $product;//obtenemos guardamos nuestros productos atraves del slug en el array $cart-show
    	\Session::put('cart', $cart);//actualiza la variable de sesion

    	return redirect()->route('cart-show');//retorna a la vista del carrito

    }
    //metodo para eliminar productos del carrito
    public function delete(Product $product){
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);//borra elementos del carrito
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');        

    }

    //metodo para vaciar el carrito
    public function trash(){
        \Session::forget('cart'); //vacia el carrito con forget()
        return redirect()->route('cart-show');
        }

    //metodo para actualizar cantidad en el carrito
    public function update(Product $product, $quantity){
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;//obtengo la cantidad que selecciono el usuario y lo guardo
        \Session::put('cart', $cart);


        return redirect()->route('cart-show');
    }

    private function total(){//funcion privada por que solo se va a utilizar aca
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->price * $item->quantity;
        }
        return $total;
    }
    public function orderDetail(){
        if(count(\Session::get('cart')) <= 0) return redirect()->url('/');//si no hay productos en el carrito
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.order-detail', compact('cart', 'total'));
    }
}
