@extends('layout.app')

@section('title-page', 'Shop')

@section('main')
    <div class="jumbo"></div>
    <div class="my-products">
        <div class="container">
            <h2 class="cart">Aggiungi al carrello:</h2>
            <div class="products-list">
                @foreach ($fumetti as $key => $fumetto)
                    <div class="single-product">
                        <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
                        <h4>{{$fumetto['title']}}</h4>
                        <h4 class="price">Prezzo: {{$fumetto['price']}}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection