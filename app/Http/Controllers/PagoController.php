<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use Illuminate\Support\Facades\Auth;
class PagoController extends Controller
{
    //
    public function postPedido(){
    	$this->saveOrder();
    	\Session::forget('cart');
    	return redirect('/')->with('message', 'Pedido recibido con exito. En breve nos pondremos en contacto con usted: ');

    }

    protected function saveOrder(){
    	$subtotal = 0;
    	$cart = \Session::get('cart');
    	$shipping = 100;

    	foreach ($cart as $producto) {
    		# code...
    		$subtotal += $producto->quantity * $producto->price;
    	}

    	$order = Order::create([
    		'subtotal' => $subtotal,
    		'shipping' => $shipping,
    		'user_id' => \Auth::user()->id
    	]);

    	foreach($cart as $producto){
    		$this->saveOrderItem($producto, $order->id);
    	}
    }

    protected function saveOrderItem($producto, $order_id){
    	OrderItem::create([
    		'price' => $producto->price,
    		'quantity' => $producto->quantity,
    		'product_id' => $producto->id,
    		'order_id' => $producto->id
    	]);

    }
}

        
            