<h1>
	@if(!isset($variation))
		Registrar Variacion 
	@else
		Actualizar Variacion
	@endif
</h1>
<form action="{{ !isset($variation) ? url('products/product/variation') : url('products/updateVariation/'. $variation->id)}}" method = "post">
	@csrf
    <input type="hidden" name="product_id" value="{{$product}}">
	<textarea name="reference" placeholder="Referencia de la Variacion">{{isset($variation) ? $variation->reference : ''}}</textarea><br/>
	<input type="text" name="price" placeholder="Precio de la Variacion" value="{{isset($variation) ? $variation->price : ''}}"><br/>
	<input type="submit" value="guardar"/>
</form>

<a href="{{ !isset($variation) ? route('home') :  route('product', $variation->product_id)  }}">Volver</a>