@extends('layouts.app')
@section('content')

<div class="container text">
	<div id="products">
		@foreach($products as $product)
			<div class="products white-panel">
				<h3>{{ $product->name }}</h3><hr>
				<img src="{{ $product->image }}" alt="" width="250">
				<div class="products-info panel">
					<p>{{ $product->extract }}</p>
					<h3><span class="label label-success"> Precio: ${{ number_format($product->price,2) }}</span> </h3>
					<p>
						<a class="btn btn-warning" href="#"> <i class="fa fa-cart-plus"></i> Agregar</a>
						<a class="btn btn-primary" href="{{ route('product-detail', $product->slug) }}"><i class="fa fa-chevron-circle-rigth"></i> Leer Mas</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection
@section('footer')
@include('footer.footer')
@endsection