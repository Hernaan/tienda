@extends('layouts.app')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> Detalle del pedido</h1>
	</div>
	<div class="page">
		<div class="table-cart">
		<div class="table-responsive">
			<h3>Datos del usuario</h3>
			<form action="" class="form-horizontal" method="post">
			<table class="table table-striped table-hover table-bordered">
				<tr>
					<td class="danger">Nombre: </td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td>
				</tr>
				<tr>
					<td class="danger">Usuario: </td><td>{{ Auth::user()->user }}</td>
				</tr>
				<tr>
					<td class="danger">Correo: </td><td>{{ Auth::user()->email }}</td>
				</tr>
				<tr>
					<td class="danger">Direccion: </td><td>{{ Auth::user()->address }}</td>
				</tr>
			</table>
		</div>
		<div class="table-responsive">
			<h3>Datos del pedido</h3>
			<table class="table table-striped table-hover table-bordered">
				<tr>
					<td class="danger">Producto</td>
					<td class="danger">Precio</td>
					<td class="danger">Cantidad</td>
					<td class="danger">Sub Total</td>
				</tr>
				@foreach($cart as $item)
				<tr>
					<td>{{ $item->name }}</td>
					<td>{{ number_format($item->price,2) }}</td>
					<td>{{ $item->quantity }}</td>
					<td>{{ number_format($item->price * $item->quantity,2) }}</td>
				</tr>
				@endforeach
			</table><hr>
			<h3>
				<span class="label label-success">Total: ${{ number_format($total, 2) }} </span>
			</h3><hr>
			<p>
				<a href="{{ route('cart-show') }}" class="btn btn-primary">
					<i class="fa fa-chevron-circle-left"></i> Regresar
				</a>
				<a href="{{ route('realizar-pedido') }}" class="btn btn-warning">
					Pedir <i class="fa fa-chevron-circle-right"></i>
				</a>
			</p>	
		</div>
		</form>
	</div>
	</div>
</div>
@endsection