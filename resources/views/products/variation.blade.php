<h1>Variación del producto {{$variation->product_id}}</h1>
<p>{{$variation->reference}}<br>
    {{$variation->price}}
</p>

<a href="{{route('product', $variation->product_id)}}">Volver atrás</a>