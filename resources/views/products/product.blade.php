<h1>Nombre del producto: {{$product->name}}</h1>
<p>Referencia: {{$product->reference}}<br>
    Precio: {{$product->price}}
</p>

<div>
    @include('products.variationList')
</div>

<a href="{{route('saveVariation', $product->id) }}">Registrar variación de este producto</a>
<a href="{{route('home')}}">Volver atrás</a>