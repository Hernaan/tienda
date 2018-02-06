@extends('layouts.app')
@section('content')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> Carrito de Compras</h1>
	</div>
	<div class="table-cart">
		@if(count($cart))
		<p>
			<a href="{{ route('cart-trash') }}" class="btn btn-danger">
				<i class="fa fa-trash"></i> Vaciar carrito
			</a>
		</p>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Sub total</th>
					<th>Quitar</th>
				</tr>
			</thead>
			<tbody>
				
					@foreach($cart as $item)
						<tr>
							<th><img src="{{ $item->image}}" alt=""></th>
							<th>{{ $item->name }}</th>
							<th>{{ number_format($item->price,2) }}</th>
							<th>
								<input type="number" min="1" max="100" value="{{ $item->quantity }}" id="product_{{ $item->id }}">
								<a href="#" class="btn btn-warning btn-update-item" data-href="{{ route('cart.update', $item->slug) }}" data-id="{{ $item->id }}"><i class="fa fa-refresh"></i></a>
							</th>
							<th>${{ number_format($item->price * $item->quantity, 2) }}</th>
							<th><a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger"><i class="fa fa-remove"></i></a></th>
						</tr>
						<tr>
							<script>
								function sumar() {

									  var total = {{ $item->price }};

									  $(".monto").each(function() {

									    if (isNaN(parseFloat($(this).val()))) {

									      total += 0;

									    } else {

									      total *= parseFloat($(this).val());

									    }

									  });

									  //alert(total);
									  document.getElementById('spTotal').innerHTML = total;

									}

							</script>
						</tr>		
					@endforeach
				
			</tbody>
		</table><hr>
		<h3>
			<span class="label label-success">
				Total: ${{ number_format($total)}}  
			</span>
		</h3>
	</div>
	@else
		<h3><span class="label label-warning">No hay productos en el carrito :(</span></h3>
	@endif
	<hr>
	<p>
		<a href="{{ url('/') }}" class="btn btn-primary">
			<i class="fa fa-chevron-circle-left"></i>
			Seguir comprando
		</a>
		@if(count($cart))
		<a href="{{ route('order-detail') }}" class="btn btn-primary">
			Continuar <i class="fa fa-chevron-circle-right"></i>
		</a>
		@endif
	</p>

	</div>
</div>
@endsection