@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{session('message')}}
            </div>
        @endif
    </div>
    <br/>
    @include('products.productsList');
    
    
</div>
@endsection
