@extends('layout.app')

@section('title-page', 'Homepage')

@section('main')
<div class="jumbo"></div>
    <div class="my-products">
      <div class="container">
        <span class="series">CURRENT SERIES</span>
        <div class="products-list">
            @foreach ($fumetti as $fumetto)
                <div class="single-product">
                    <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
                    <h5>{{$fumetto['title']}}</h5>
                </div>
            @endforeach
        </div>
        <div class="my-btn">
          <a href="#">LOAD MORE</a>
        </div>
      </div>
    </div>
@endsection