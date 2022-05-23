<h1>
	@if(!isset($product))
		Registrar producto 
	@else
		Actualizar producto
	@endif
</h1>
<form action="{{ !isset($product) ? url('products/product') : url('products/updateProduct/'. $product->id)}}" method = "post">
	@csrf
	<input type="text" name="name" placeholder="Nombre del producto" value="{{ isset($product) ? $product->name : ''}}"></br>
	<textarea name="reference" placeholder="Referencia del producto">{{isset($product) ? $product->reference : ''}}</textarea><br/>
	<input type="text" name="price" placeholder="Precio del producto" value="{{isset($product) ? $product->price : ''}}"><br/>
	<input type="submit" value="guardar"/>
</form>

<a href="{{route('home')}}">Volver al listado</a>