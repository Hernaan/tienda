
$(document).ready(function() {
	$('#products').pinterest_grid({
		no_columns: 4,
		padding_x: 10,
		padding_y: 10,
		margin_bottom: 50,
		single_column_breakpoint: 700
	});
//actualizar cantidad de productos en el carrito
	$('.btn-update-item').on('click', function(e){
		e.preventDefault();
		var id = $(this).data('id');//id del producto
		var href =  $(this).data('href');//url del producto
		var quantity = $('#product_' + id).val();
		window.location.href = href + "/" + quantity;//redirecciono y paso la cantidad
	});


});

	
