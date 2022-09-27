@extends('layout.app')

@section('title-page', $fumetto['title'])

@section('main')
    <div class="jumbo"></div>
    <div class="my-products">
        <div class="container">
            <div class="singleComic">
                <img class="singleComicImg" src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
                <h3 class="singleComicTitle">{{$fumetto['title']}}</h3>
                <h4 class="singleComicSeries">{{$fumetto['series']}}</h4>
                <span class="singleComicPrice">{{$fumetto['price']}}</span>
                <p class="singleComicDesc">{{$fumetto['description']}}</p>
                <h5 class="singleComicSale">In vendita dal: {{$fumetto['sale_date']}}</h5>
            </div>
        </div>
    </div>
@endsection