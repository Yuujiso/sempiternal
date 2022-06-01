@extends('layouts.front')

@section('title')
    Welcome to Sempiternal
@endsection

@section('content')
    @foreach($featured_products as $prod)
    <div class="grid__item  small--one-half medium--one-half large--one-quarter product-grid-item">
        <div style="padding:0.0% 0;">
            <a href=" {{ url('viewproduct/'.$prod->slug) }}" class="product-image zoom" style="padding-top: 100%; background-image: none;">
                <img src=" {{ asset('assets/uploads/product/'.$prod->image) }}" alt="Product image" data-widths="278" data-aspectratio="1.0" data-sizes="auto" sizes="278px">
            </a>
        </div>
        <div class="figcaption under text-center">
            <a href=" {{ url('viewproduct/'.$prod->slug) }}">
                <p class="h5--accent strong">{{ $prod->name  }}</p>
                <p><span>${{ $prod->selling_price }}</span></p>
            </a>
        </div>
    </div>
    @endforeach
@endsection

