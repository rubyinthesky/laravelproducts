<h3>Listado de Variaciones de este producto</h3>
<ul>

@foreach ($variations as $variation)
    <li>
    	<ul>
    		<li>Referencia: {{$variation->reference}}</li>
    		<li><a href="{{url('/products/product/variation/'. $variation->id )}}">Ver</a></li>
    		<li><a href="{{url('/products/deleteVariation/'. $variation->id )}}">Borrar</a></li>
    		<li><a href="{{url('/products/updateVariation/'. $variation->id )}}">Actualizar</a></li>
    	</ul>
    </li>
@endforeach
</ul>