<h1>App de productos</h1>

<a href="{{url('products/saveProduct')}}">Registrar Producto</a>

@if(session('status'))
	{{session('status')}}
@endif

<h3>Listado de productos</h3>
<ul>
@foreach ($products as $product)

    <li>
    	<ul>
    		<li>{{$product->name}}</li>
    		<li><a href="{{url('/products/product/'. $product->id )}}">Ver</a></li>
    		<li><a href="{{url('/products/deleteProduct/'. $product->id )}}">Borrar</a></li>
    		<li><a href="{{url('/products/updateProduct/'. $product->id )}}">Actualizar</a></li>
    	</ul>
    </li>
@endforeach
</ul>