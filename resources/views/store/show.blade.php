@extends('layouts.app')
@section('content')
<div class="container text-center">
	<div class="page-header">	
		<h1><i class="fa fa-shopping-cart"></i> Detalle del Producto</h1>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $products->image }}" alt="">
			</div>
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $products->name }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $products->description }}</p>
					<h3>
						<span class="label label-success">Precio: ${{ number_format($products->price,2) }}</span>
					</h3>
					<p>
						<a class="btn btn-warning btn-block" href="{{ route('cart-add', $products->slug) }}">
							Agregar 
							<i class="fa fa-cart-plus fa-1x"></i>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div><hr>
	
	
	<p>
		<a class="btn btn-primary" href="{{ url('/') }}"><i class="fa fa-chevron-circle-left"></i> Regresar</a>
	</p>
</div>
@endsection